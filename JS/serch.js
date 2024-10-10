document.getElementById('searchButton').addEventListener('click', function() {
    const searchTerm = document.getElementById('searchInput').value;
    const resultsDiv = document.getElementById('searchResults');
    
    // Clear previous results
    resultsDiv.innerHTML = '';

    // Dummy data for demonstration (replace with your actual data)
    const data = ['apple', 'banana', 'orange', 'grape', 'mango', 'pineapple'];

    // Filter the data based on the search term
    const results = data.filter(item => item.toLowerCase().includes(searchTerm.toLowerCase()));

    // Display results
    if (results.length > 0) {
        results.forEach(result => {
            const resultItem = document.createElement('div');
            resultItem.textContent = result;
            resultsDiv.appendChild(resultItem);
        });
    } else {
        resultsDiv.textContent = 'No results found.';
    }
});
