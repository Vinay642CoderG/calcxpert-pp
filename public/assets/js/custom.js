document.addEventListener('DOMContentLoaded', function () {
    const accordionItems = document.querySelectorAll('.accordion-item');

    function setupSearchSuggestions(input, resultsBoxId) {
        const resultsBox = document.getElementById(resultsBoxId);

        if (!input || !resultsBox) {
            return;
        }

        let debounceTimer;
        let cachedItems = null;

        function fetchSuggestions(value) {
            if (!value) {
                resultsBox.innerHTML = '';
                resultsBox.classList.remove('visible');
                return;
            }

            if (!cachedItems) {
                fetch('/calculators.json')
                    .then(function (response) {
                        if (!response.ok) {
                            throw new Error('Failed to load calculators');
                        }

                        return response.json();
                    })
                    .then(function (items) {
                        cachedItems = items || [];
                        renderSuggestions(value, cachedItems);
                    })
                    .catch(function () {
                        resultsBox.innerHTML = '';
                        resultsBox.classList.remove('visible');
                    });
                return;
            }

            renderSuggestions(value, cachedItems);
        }

        function renderSuggestions(value, items) {
            const results = items.filter(function (item) {
                const searchText = [
                    item.title,
                    item.category,
                    ...(item.keywords || [])
                ].join(' ').toLowerCase();

                return searchText.includes(value);
            }).slice(0, 8);

            if (!results.length) {
                resultsBox.innerHTML = '<div class="search-result-item" tabindex="0">No calculators found</div>';
                resultsBox.classList.add('visible');
                return;
            }

            resultsBox.innerHTML = results.map(function (item) {
                return `
                    <a class="search-result-item" href="${item.url}" tabindex="0">
                        <span class="search-result-title">${item.title}</span>
                        <span class="search-result-category">${item.category}</span>
                    </a>
                `;
            }).join('');

            resultsBox.classList.add('visible');
        }

        input.addEventListener('input', function () {
            const value = input.value.trim().toLowerCase();

            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(function () {
                fetchSuggestions(value);
            }, 250);
        });

        document.addEventListener('click', function (event) {
            if (!input.contains(event.target) && !resultsBox.contains(event.target)) {
                resultsBox.classList.remove('visible');
            }
        });
    }

    setupSearchSuggestions(document.querySelector('.navbar-search-input'), 'navbar-search-results');
    setupSearchSuggestions(document.querySelector('.homepage-search-input'), 'homepage-search-results');

    // FAQ accordion
    accordionItems.forEach(function (item) {
        const header = item.querySelector('.accordion-header');

        if (!header) {
            return;
        }

        header.addEventListener('click', function () {
            const isOpen = item.classList.contains('active');

            accordionItems.forEach(function (accordionItem) {
                accordionItem.classList.remove('active');

                const accordionHeader = accordionItem.querySelector('.accordion-header');

                if (accordionHeader) {
                    accordionHeader.setAttribute('aria-expanded', 'false');
                }
            });

        if (!isOpen) {
                item.classList.add('active');
                header.setAttribute('aria-expanded', 'true');
            }
        });
    });

});
