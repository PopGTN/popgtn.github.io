
    const username = 'YOUR_USERNAME';
    const perPage = 6;
    let currentPage = 1;

    function getRepositories() {
    fetch(`https://api.github.com/users/${username}/repos?per_page=${perPage}&page=${currentPage}`)
        .then((response) => response.json())
        .then((data) => displayRepositories(data));
}

    function displayRepositories(repositories) {
    // Your code to display repositories in cards goes here
}

    getRepositories();

