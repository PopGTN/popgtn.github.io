const username = 'PopGTN'; // Your GitHub username
const perPage = 12; // Number of repositories per page
let currentPage = 1; // Current page number

const repoList = document.getElementById('repo-list');
const pagination = document.getElementById('pagination');

function fetchAndDisplayRepos(page) {
    // Calculate the page number and per_page for the GitHub API
    const pageStart = (page - 1) * perPage;
    const pageEnd = page * perPage;

    fetch(`https://api.github.com/users/${username}/repos?sort=pushed&per_page=${pageEnd}`)
        .then(response => response.json())
        .then(data => {
            // Slice the data to get repositories for the current page
            const repositories = data.slice(pageStart, pageEnd);

            // Clear the repoList and pagination
            repoList.innerHTML = '';
            pagination.innerHTML = '';

            // Loop through the repositories and create cards
            repositories.forEach(repo => {
                const card = document.createElement('div');
                card.classList.add('card');

                const cardBody = document.createElement('div');
                cardBody.classList.add('card-body');

                const cardTitle = document.createElement('h5');
                cardTitle.classList.add('card-title');
                cardTitle.textContent = repo.name;

                const cardText = document.createElement('p');
                cardText.classList.add('card-text');
                cardText.textContent = repo.description || 'No description available';

                const viewButton = document.createElement('a');
                viewButton.classList.add('btn', 'btn-primary');
                viewButton.textContent = 'View Repository';
                viewButton.href = repo.html_url;
                viewButton.target = '_blank'; // Open link in a new tab

                // Append elements to the card
                cardBody.appendChild(cardTitle);
                cardBody.appendChild(cardText);
                cardBody.appendChild(viewButton);

                card.appendChild(cardBody);

                // Append the card to the repoList
                repoList.appendChild(card);
            });

            // Create pagination links
            const totalPages = Math.ceil(data.length / perPage);
            for (let i = 1; i <= totalPages; i++) {
                const pageLink = document.createElement('li');
                pageLink.classList.add('page-item');
                if (i === page) {
                    pageLink.classList.add('active');
                }
                const pageButton = document.createElement('a');
                pageButton.classList.add('page-link');
                pageButton.textContent = i;
                pageButton.href = '#';
                pageButton.addEventListener('click', () => {
                    currentPage = i;
                    fetchAndDisplayRepos(currentPage);
                });

                pageLink.appendChild(pageButton);
                pagination.appendChild(pageLink);
            }
        })
        .catch(error => {
            console.error('Error fetching data from GitHub API:', error);
        });
}

fetchAndDisplayRepos(currentPage);