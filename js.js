function sendForm() {

    // Capture form data
    var fullName = document.getElementById('fullName').value.trim();
    var phoneNumber = document.getElementById('phoneNumber').value.trim();
    var emailAddress = document.getElementById('emailAddress').value.trim();
    var checkIn = document.getElementById('checkinDate').value;
    var checkOut = document.getElementById('checkoutDate').value;
    var adultCount = document.getElementById('adultsCount').value;
    var childCount = document.getElementById('childrenCount').value;
    var budget = document.getElementById('budget').value.trim();
    var specialNote = document.getElementById('specialNote').value.trim();
    var country = document.getElementById('country').value.trim();   // Added Country field
    var nationality = document.getElementById('nationality').value.trim(); // Added Nationality field

    var alertLabel = document.getElementById('alert-lable');
    var buttn = document.getElementById('submitButton');
    buttn.innerHTML = "<div class='spinner-border text-light' role='status'> <span class='visually-hidden'>Loading...</span> </div>";
    alertLabel.className = 'text-danger d-none'; // Reset the alert label

    // Prepare the form data to send via POST
    var formData = new FormData();
    formData.append('fullName', fullName);
    formData.append('phoneNumber', phoneNumber);
    formData.append('emailAddress', emailAddress);
    formData.append('checkIn', checkIn);
    formData.append('checkOut', checkOut);
    formData.append('adultCount', adultCount);
    formData.append('childCount', childCount);
    formData.append('budget', budget);
    formData.append('specialNote', specialNote);
    formData.append('country', country);  // Added Country data
    formData.append('nationality', nationality); // Added Nationality data

    // Create a new XMLHttpRequest to send the data
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'enquiryprocess.php', true);

    // Handle the response
    xhr.onload = function () {
        if (xhr.status === 200) {
            buttn.innerHTML = "<span data-hover='Submit'>Submit</span> <i class='fal fa-arrow-right'></i>";
            if (xhr.responseText === 'success') {
                alertLabel.className = 'text-success'; // Make label visible with green color
                alertLabel.innerHTML = 'Enquiry received successfully! We will get in touch with you as soon as possible.';
            } else {
                alertLabel.className = 'text-danger'; // Make label visible with red color
                alertLabel.innerHTML = '* ' + xhr.responseText; // Show the error message
            }
        } else {
            alert('There was an issue with your submission. Please try again.');
        }
    };

    // Send the form data to the server
    xhr.send(formData);
};


function sendTForm() {

    // Capture form data
    var fullName = document.getElementById('fullName').value.trim();
    var phoneNumber = document.getElementById('phoneNumber').value.trim();
    var emailAddress = document.getElementById('emailAddress').value.trim();
    var checkIn = document.getElementById('checkinDate').value;
    var checkOut = document.getElementById('checkoutDate').value;
    var adultCount = document.getElementById('adultsCount').value;
    var childCount = document.getElementById('childrenCount').value;
    var fromLocation = document.getElementById('fromLocation').value.trim();
    var toLocation = document.getElementById('toLocation').value.trim();
    var country = document.getElementById('country').value.trim();
    var nationality = document.getElementById('nationality').value.trim();
    var specialNote = document.getElementById('specialNote').value.trim();

    var alertLabel = document.getElementById('alert-lable');
    var button = document.getElementById('submitButton');
    button.innerHTML = "<div class='spinner-border text-light' role='status'> <span class='visually-hidden'>Loading...</span> </div>";
    alertLabel.className = 'text-danger d-none'; // Reset the alert label

    // Prepare the form data to send via POST
    var formData = new FormData();
    formData.append('fullName', fullName);
    formData.append('phoneNumber', phoneNumber);
    formData.append('emailAddress', emailAddress);
    formData.append('checkIn', checkIn);
    formData.append('checkOut', checkOut);
    formData.append('adultCount', adultCount);
    formData.append('childCount', childCount);
    formData.append('fromLocation', fromLocation);
    formData.append('toLocation', toLocation);
    formData.append('country', country);
    formData.append('nationality', nationality);
    formData.append('specialNote', specialNote);

    // Create a new XMLHttpRequest to send the data
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'tenquiryprocess.php', true);

    // Handle the response
    xhr.onload = function () {
        if (xhr.status === 200) {
            button.innerHTML = "<span data-hover='Submit'>Submit</span> <i class='fal fa-arrow-right'></i>";
            if (xhr.responseText === 'success') {
                alertLabel.className = 'text-success'; // Make label visible with green color
                alertLabel.innerHTML = 'Enquiry received successfully! We will get in touch with you as soon as possible.';
            } else {
                alertLabel.className = 'text-danger'; // Make label visible with red color
                alertLabel.innerHTML = '* '+xhr.responseText; // Show the error message
            }
        } else {
            alert('There was an issue with your submission. Please try again.');
        }
    };

    // Send the form data to the server
    xhr.send(formData);
};

function sendCForm() {

    // Capture form data
    var fullName = document.getElementById('fullName').value.trim();
    var phoneNumber = document.getElementById('phoneNumber').value.trim();
    var emailAddress = document.getElementById('emailAddress').value.trim();
    var checkIn = document.getElementById('checkinDate').value;
    var checkOut = document.getElementById('checkoutDate').value;
    var adultCount = document.getElementById('adultsCount').value;
    var childCount = document.getElementById('childrenCount').value;
    var country = document.getElementById('country').value.trim();
    var nationality = document.getElementById('nationality').value.trim();
    var specialNote = document.getElementById('specialNote').value.trim();

    var alertLabel = document.getElementById('alert-lable');
    var buttn = document.getElementById('submitButton');
    buttn.innerHTML = "<div class='spinner-border text-light' role='status'> <span class='visually-hidden'>Loading...</span> </div>";
    alertLabel.className = 'text-danger d-none'; // Reset the alert label

    // Prepare the form data to send via POST
    var formData = new FormData();
    formData.append('fullName', fullName);
    formData.append('phoneNumber', phoneNumber);
    formData.append('emailAddress', emailAddress);
    formData.append('checkIn', checkIn);
    formData.append('checkOut', checkOut);
    formData.append('adultCount', adultCount);
    formData.append('childCount', childCount);
    formData.append('country', country);
    formData.append('nationality', nationality);
    formData.append('specialNote', specialNote);

    // Create a new XMLHttpRequest to send the data
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'cenquiryprocess.php', true);

    // Handle the response
    xhr.onload = function () {
        if (xhr.status === 200) {
            buttn.innerHTML = "<span data-hover='Submit'>Submit</span> <i class='fal fa-arrow-right'></i>";
            if (xhr.responseText === 'success') {
                alertLabel.className = 'text-success'; // Make label visible with green color
                alertLabel.innerHTML = 'Enquiry received successfully! We will get in touch with you as soon as possible.';
            } else {
                alertLabel.className = 'text-danger'; // Make label visible with red color
                alertLabel.innerHTML = '* '+xhr.responseText; // Show the error message
            }
        } else {
            alert('There was an issue with your submission. Please try again.');
        }
    };

    // Send the form data to the server
    xhr.send(formData);
};

