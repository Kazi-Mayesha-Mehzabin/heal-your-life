
//for  specilization dropdown
const dropdown = document.querySelector('.custom-dropdown');
const dropdownOptions = document.getElementById('dropdownOptions');
const selectedOption = document.getElementById('selectedOption');

// Show dropdown options on mouse hover
dropdown.addEventListener('mouseenter', () => {
    dropdownOptions.style.display = 'block';
});

// Hide dropdown options when mouse leaves
dropdown.addEventListener('mouseleave', () => {
    dropdownOptions.style.display = 'none';
});

// Update input field when an option is clicked
dropdownOptions.addEventListener('click', (event) => {
    if (event.target.tagName === 'LI') {
        selectedOption.value = event.target.textContent; // Set the selected value in the input
        dropdownOptions.style.display = 'none'; // Hide the dropdown after selection
    }
});
