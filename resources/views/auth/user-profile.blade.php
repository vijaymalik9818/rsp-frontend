@extends('layouts.pages')
@section('content')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <head>
        <link href="{{ asset('frontend/css/user-prof.css') }}" rel="stylesheet" />

    </head>

    <body>
                <div class="container profile-div my-5">
                    <div class="d-flex flex-column  flex-lg-row align-items-start">
                        <div class="nav flex-column nav-pills me-3 pro-tabs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                aria-selected="true">Profile</button>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile" type="button" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false"
                                onclick="activateSavedSearchButton()">Saved search</button>
                            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-messages" type="button" role="tab"
                                aria-controls="v-pills-messages" aria-selected="false">Favorites</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-settings" type="button" role="tab"
                                aria-controls="v-pills-settings" aria-selected="false">Login Info</button>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="tabs">
                                    <button class="tablinks" id='basic-tab' onclick="openTab(event, 'basic')">Basic
                                        Details</button>
                                    <button class="tablinks" id='update-tab' onclick="openTab(event, 'update')">Update
                                        Password</button>
                                </div>


                                <div id="myModal" class="modal">
                                    <div class="modal-content">
                                        <span class="close">&times;</span>
                                        <p id="modalName"></p>
                                        <p id="modalPhone"></p>
                                    </div>
                                </div>

                                <div id="basic" class="tabcontent">
                                    <h2>Basic Details</h2>
                                    <form id="updateprofile">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 mb-2 mb-sm-0 col-sm-6">
                                                <label for="email">Email Address:</label>
                                                <input type="email" id="email" name="email" required
                                                    value="{{ $userData['email'] ?? '' }}">
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <label for="fullname">Full Name:</label>
                                                <input type="text" id="fullname" name="fullname" required
                                                    value="{{ $userData['name'] ?? '' }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 mt-2">
                                                <label for="mobilenumber">Mobile Number:</label>
                                                <input type="tel" id="mobilenumber" name="mobilenumber" required
                                                       value="{{ ($userData['phone'] ?? '') !== '12345' ? ($userData['phone'] ?? '') : '' }}">
                                            </div>
                                            <div class='col-12 col-sm-6 mt-2'>
                                                <label>I'm a:</label>
                                                <div class="input-2 cursor-pointer">
                                                    <select id="roles" name="roles" class="select-boxes-filter cursor-pointer">
                                                        <option value="" <?php echo (isset($userData['role']) && $userData['role'] == '') ? 'selected' : ''; ?>>Select</option>
                                                        <option value="Buyer" <?php echo (isset($userData['role']) && $userData['role'] == 'Buyer') ? 'selected' : ''; ?>>First time buyer</option>
                                                        <option value="Agent" <?php echo (isset($userData['role']) && $userData['role'] == 'Agent') ? 'selected' : ''; ?>>Repeat buyer</option>
                                                        <option value="Seller" <?php echo (isset($userData['role']) && $userData['role'] == 'Seller') ? 'selected' : ''; ?>>Seller</option>
                                                        <option value="Residential investor" <?php echo (isset($userData['role']) && $userData['role'] == 'Residential investor') ? 'selected' : ''; ?>>Residential investor</option>
                                                        <option value="Commercial investor" <?php echo (isset($userData['role']) && $userData['role'] == 'Commercial investor') ? 'selected' : ''; ?>>Commercial investor</option>
                                                        <option value="Commercial buyer/leaser" <?php echo (isset($userData['role']) && $userData['role'] == 'Commercial buyer/leaser') ? 'selected' : ''; ?>>Commercial buyer/leaser</option>
                                                        <option value="Land of development" <?php echo (isset($userData['role']) && $userData['role'] == 'Land of development') ? 'selected' : ''; ?>>Land of development</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="col-6 sub-btn">
                                                <input class='ud-btn btn-primary d-block' id="submit-btn" type="button"
                                                    value="Update" onclick="updateProfile()">
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div id="update" class="tabcontent">
                                    <h2>Update Password</h2>
                                    <form id="updatepassword">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <label for="password">New Password</label>
                                                <input type="password" id="newpass" name="password">
                                            </div>
                                            <div class="col-12 col-sm-6 mt-2 mt-sm-0">
                                                <label for="Confirm-password">Confirm password</label>
                                                <input type="password" id="confpass" name="confpassword">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 sub-btn">
                                                <input class='ud-btn btn-primary d-block' id="submit-pass" type="button"
                                                    value="Update" onclick="updatePassword()">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                {{-- <div class="tabs">
                                    <button class="tablinks" id='save-tab'
                                        onclick="opentabs(event, 'save-search')">Saved
                                        Search</button>
                                    <button class="tablinks" id='email-tab'
                                        onclick="opentabs(event, 'email-history')">Email
                                        History</button>
                                </div> --}}




                                <div id="save-search" class="tabcontents" style="display: block;">
                                    <h2>Saved Searches</h2>
                                    <table id="saved-search-table">
                                        <thead>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Search Name</th>
                                                <th>Frequency</th>
                                                <th>Email Alert</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                    <div id="pagination-links">
                                        <!-- Pagination links will be displayed here -->
                                    </div>
                                </div>
                                <div id="email-history" class="tabcontents" style="display: none;">
                                    <h2>Email-history</h2>
                                </div>
                            </div>
                            <div class="tab-pane fade tabcontents" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <h2>Favorites Properties</h2>
                                <div class="row" id="diamond_listings"></div>
                                <div id="paginations">

                                </div>


                            </div>
                            <div class="tab-pane fade tabcontents" id="v-pills-settings" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">
                                <div id="login-info-table">
                                    <h2>Login Information</h2>
                                    <table id="login-info-table">
                                        <thead>
                                            <tr>
                                                <th>Sr. no.</th>
                                                <th>Login Date</th>
                                                <th>Login Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                    <div id="pagination-link">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
    <script>
        toastr.options = {
            'closeButton': true,
            'debug': false,
            'newestOnTop': false,
            'progressBar': false,
            'positionClass': 'toast-top-right',
            'preventDuplicates': false,
            'showDuration': '1000',
            'hideDuration': '1000',
            'timeOut': '5000',
            'extendedTimeOut': '1000',
            'showEasing': 'swing',
            'hideEasing': 'linear',
            'showMethod': 'fadeIn',
            'hideMethod': 'fadeOut',
        }

        function activateSavedSearchButton() {

            var saveSearchButton = document.getElementById("save-tab");

            saveSearchButton.classList.add("active");
        }

        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;

            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }


        function opentabs(evt, tabName) {
            var i, tabcontents, tablinks;

            tabcontents = document.getElementsByClassName("tabcontents");
            for (i = 0; i < tabcontents.length; i++) {
                tabcontents[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].classList.remove("active");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.classList.add("active");
        }


        window.onload = function() {
            document.getElementById('basic').style.display = 'block';
            document.getElementById('basic-tab').classList.add('active');


        };

        function updateProfile() {
            const email = document.querySelector('#updateprofile input[name="email"]').value.trim();
            const fullname = document.querySelector('#updateprofile input[name="fullname"]').value.trim();
            const mobilenumber = document.querySelector('#updateprofile input[name="mobilenumber"]').value
                .trim();
                const roleSelect = document.querySelector('#roles');
                // console.log(roleSelect);
                // const roleSelect = document.getElementById('role');
                const roles = roleSelect.value;
                console.log(roles);
            if (fullname === '' || mobilenumber === '' || email === '' || role === '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Validation Error',
                    text: 'Please fill all the required fields.',


                    willOpen: () => {
                        Swal.getPopup().style.zIndex = 10000;
                    }
                });
                return;
            }

            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                Swal.fire({
                    icon: 'error',
                    title: 'Validation Error',
                    text: 'Please enter a valid email address.'
                });
                return;
            }

            if (mobilenumber.length < 10) {
                Swal.fire({
                    icon: 'error',
                    title: 'Validation Error',
                    text: 'Please make sure the phone number is at least 10 digits long.'
                });
                return;
            }

            const submitButton = document.getElementById('submit-btn');
            submitButton.disabled = true;

            var baseUrl = "{{ env('BACKEND_URL', 'http://myproagents.com') }}";
            var id = "{{ $userData['id'] }}";

            $.ajax({
                url: baseUrl + '/api/agents/update-profile/' + id,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                contentType: 'application/json',
                data: JSON.stringify({
                    email: email,
                    fullname: fullname,
                    mobilenumber: mobilenumber,
                    role: roles
                }),
                success: function(response) {
                    console.log('Profile updated successfully');
                    toastr.success('Profile updated successfully');
                    submitButton.disabled = false;
                },
                error: function(xhr, status, error) {
                    console.error('Failed to update profile');
                    toastr.error('Failed to update profile');
                    submitButton.disabled = false;
                }
            });
        }

        function updatePassword() {
            const newPassword = document.querySelector('#newpass').value.trim();
            const confirmPassword = document.querySelector('#confpass').value.trim();
            const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[a-zA-Z\d@$!%*?&]{8,}$/;

            if (newPassword === '' || confirmPassword === '') {

                Swal.fire({
                    icon: 'error',
                    title: 'Validation Error',
                    text: 'Please fill in both password fields.'
                });
                return;

            }
            if (newPassword !== confirmPassword) {
                Swal.fire({
                    icon: 'error',
                    title: 'Validation Error',
                    text: 'Passwords do not match. Please re-enter.'
                });
                return;
            }
            if (!passwordRegex.test(newPassword) && newPassword != '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Validation Error',
                    text: 'Password should be at least 8 characters long and contain at least one lowercase letter, one uppercase letter and one number.'
                });
                return;
            }


            const submitButton = document.getElementById('submit-pass');
            submitButton.disabled = true;
            var baseUrl = "{{ env('BACKEND_URL', 'http://myproagents.com') }}";
            var id = "{{ $userData['id'] }}";

            $.ajax({
                url: baseUrl + '/api/lead/update-password/' + id,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                contentType: 'application/json',
                data: JSON.stringify({
                    newPassword: newPassword
                }),
                success: function(response) {
                    document.querySelector('#newpass').value = '';
                    document.querySelector('#confpass').value = '';
                    toastr.success('Password updated successfully');
                    submitButton.disabled = false;
                },
                error: function(xhr, status, error) {
                    console.error('Failed to update password');
                    toastr.error('Failed to update password');
                    submitButton.disabled = false;
                }
            });
        }

        function validateAlphabets(event) {
            const input = event.target;
            const regex = /^[a-zA-Z\s]*$/;
            const key = event.key;

            if (!regex.test(key) && key !== 'Backspace' || input.value.length >= 40) {
                event.preventDefault();
            }
        }

        ['fullname'].forEach(function(id) {
            document.getElementById(id).addEventListener("keypress", validateAlphabets);
        });

        ['mobilenumber'].forEach(fieldId => {
            document.getElementById(fieldId).addEventListener("input", function(event) {
                let phoneInput = event.target.value.replace(/\D/g, '').slice(0, 10);
                event.target.value = phoneInput.replace(/(\d{3})(\d{3})(\d{4})/, '($1) $2-$3');
            });
        });



        document.addEventListener("DOMContentLoaded", function() {
            openTab(event, 'save-search');
            var baseUrl = "{{ env('BACKEND_URL', 'http://myproagents.com') }}";
            var id = "{{ $userData['id'] }}";
            var url = baseUrl + '/api/agents/getsavesearch/' + id
            populateSavedSearchTable(url);
        });


    function populateSavedSearchTable(url) {
    $.ajax({
        url: url,
        method: 'GET',
        success: function(data) {
            console.log('data: ', data);

            const tableBody = document.querySelector('#saved-search-table tbody');
            tableBody.innerHTML = '';
            if (data.saved_searches.data.length > 0) {
                var currentPage = data.saved_searches.current_page;
                var recordsPerPage = data.saved_searches.per_page;
                var startSerial = (currentPage - 1) * recordsPerPage + 1;
                createPaginationLinks(data.saved_searches);
                data.saved_searches.data.forEach(function(search, index) {
                    const filters = {
                        community: search.community,
                        search: search.city,
                        min_list_price: search.min_price,
                        max_list_price: search.max_price,
                        min_bedrooms: search.beds,
                        min_bathrooms: search.bath,
                        property_type: search.property_type,
                        min_sqft: search.min_sqft,
                        max_sqft: search.max_sqft,
                        min_acrs: search.min_acres,
                        max_acrs: search.max_acres,
                        min_year_built: search.min_yearbuilt,
                        max_year_built: search.max_yearbuilt,
                        furnished: search.furnishedCheckbox,
                        pets: search.petsCheckbox,
                        fireplace: search.fireplace,
                        onegarage: search.onegarage,
                        twogarage: search.twogarage,
                        threegarage: search.threegarage,
                        onestory: search.onestory,
                        twostories: search.twostories,
                        threestories: search.threestories,
                        deck: search.deck,
                        basement: search.basement,
                        airconditioning: search.airconditioning,
                        just_listed: search.just_listed,
                        frontporch: search.frontporch,
                        patio: search.patio,
                        lake: search.lake,
                        playground: search.playground,
                        streetlights: search.streetlights,
                        pool: search.pool,
                        laundry: search.laundry,
                        gazebo: search.gazebo,
                        clubhouse: search.clubhouse,
                        balcony: search.balcony,
                        parking: search.parking
                    };

                    const appliesFilters = [];

                    function addAppliesFilter(key, value) {
                    if (value) { 
                        appliesFilters.push(key);
                    }
                    }

                    addAppliesFilter('balcony', search.furnishedCheckbox);
                    addAppliesFilter('parking', search.petsCheckbox);
                    addAppliesFilter('fireplace', search.fireplace);
                    addAppliesFilter('onegarage', search.onegarage);
                    addAppliesFilter('twogarage', search.twogarage);
                    addAppliesFilter('threegarage', search.threegarage);
                    addAppliesFilter('onestory', search.onestory);
                    addAppliesFilter('twostories', search.twostories);
                    addAppliesFilter('threestories', search.threestories);
                    addAppliesFilter('deck', search.deck);
                    addAppliesFilter('basement', search.basement);
                    addAppliesFilter('airconditioning', search.airconditioning);
                    addAppliesFilter('frontporch', search.frontporch);
                    addAppliesFilter('patio', search.patio);
                    addAppliesFilter('lake', search.lake);
                    addAppliesFilter('playground', search.playground);
                    addAppliesFilter('streetlights', search.streetlights);
                    addAppliesFilter('pool', search.pool);
                    addAppliesFilter('laundry', search.laundry);
                    addAppliesFilter('gazebo', search.gazebo);
                    addAppliesFilter('clubhouse', search.clubhouse);
                    addAppliesFilter('just_listed', search.just_listed);

                    const appliesFiltersQueryString = appliesFilters.join('%2c');

                    const otherFiltersQueryString = Object.keys(filters)
                        .filter(key => ![
                            'balcony', 'parking', 'fireplace', 'onegarage', 'twogarage', 'threegarage', 
                            'onestory', 'twostories', 'threestories', 'deck', 'basement', 
                            'airconditioning', 'just_listed', 'frontporch', 'patio', 'lake', 
                            'playground', 'streetlights', 'pool', 'laundry', 'gazebo', 'clubhouse'
                        ].includes(key)) // Exclude applies_filters
                        .map(key => {
                            if (filters[key] !== null && filters[key] !== undefined && filters[key] !== 0) {
                                return `${encodeURIComponent(key)}=${encodeURIComponent(filters[key])}`;
                            } else {
                                return '';
                            }
                        })
                        .filter(Boolean)
                        .join('&');

                    const queryString = [
                        otherFiltersQueryString,
                        appliesFiltersQueryString ? `applies_filters=${appliesFiltersQueryString}` : '' 
                    ].filter(Boolean).join('&');


                    const row = `<tr>
                        <td>${startSerial + index}</td>
                        <td class="search-title" style="cursor: pointer;">
                            <a href="/search?${queryString}">${search.title}</a>
                        </td>
                        <td>${search.duration}</td>
                        <td>${search.email_alert ? 'Active' : 'Inactive'}</td>
                        <td>
                            <a class="search-view" id="searchIcon" data-search='${JSON.stringify(search)}' style="cursor: pointer;"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <a onclick="deleteSearch(${search.id})" style="cursor: pointer;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>`;
                    tableBody.insertAdjacentHTML('beforeend', row);
                });
            } else {
                document.getElementById('pagination-links').style.display = 'none';
                tableBody.innerHTML = '<p style="align-items:center;">OOPS! NO data FOUND</p>';
            }
        },
        error: function(xhr, status, error) {
            console.error('Failed to fetch saved search data:', error);
        }
    });
}

    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('fa-eye')) {
            // Get the search data from the clicked element
            const search = JSON.parse(event.target.closest('a.search-view').getAttribute('data-search'));
            createModal(search);
        }
    });

    function createModal(search) {
        const modal = `
        <div class="modal fade" id="searchDetailsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">${search.title} Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4"><strong>Duration:</strong> ${search.duration}</div>
                            <div class="col-md-4"><strong>City:</strong> ${search.city || 'Not specified'}</div>
                            <div class="col-md-4"><strong>Min Price:</strong> ${search.min_price || 'Not specified'}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><strong>Max Price:</strong> ${search.max_price || 'Not specified'}</div>
                            <div class="col-md-4"><strong>Beds:</strong> ${search.beds || 'Not specified'}</div>
                            <div class="col-md-4"><strong>Bath:</strong> ${search.bath || 'Not specified'}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><strong>Community:</strong> ${search.community || 'Not specified'}</div>
                            <div class="col-md-4"><strong>Property Type:</strong> ${search.property_type || 'Not specified'}</div>
                            <div class="col-md-4"><strong>Min Sqft:</strong> ${search.min_sqft || 'Not specified'}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><strong>Max Sqft:</strong> ${search.max_sqft || 'Not specified'}</div>
                            <div class="col-md-4"><strong>Min Acres:</strong> ${search.min_acres || 'Not specified'}</div>
                            <div class="col-md-4"><strong>Max Acres:</strong> ${search.max_acres || 'Not specified'}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><strong>Min Year Built:</strong> ${search.min_yearbuilt || 'Not specified'}</div>
                            <div class="col-md-4"><strong>Max Year Built:</strong> ${search.max_yearbuilt || 'Not specified'}</div>
                            <div class="col-md-4"><strong>Balcony:</strong> ${search.furnishedCheckbox ? 'Yes' : 'No'}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><strong>Parking:</strong> ${search.petsCheckbox ? 'Yes' : 'No'}</div>
                            <div class="col-md-4"><strong>Fireplace:</strong> ${search.fireplace ? 'Yes' : 'No'}</div>
                            <div class="col-md-4"><strong>Garage:</strong> ${search.onegarage || search.twogarage || search.threegarage ? 'Yes' : 'No'}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><strong>Stories:</strong> ${search.onestory || search.twostories || search.threestories ? 'Yes' : 'No'}</div>
                            <div class="col-md-4"><strong>Deck:</strong> ${search.deck ? 'Yes' : 'No'}</div>
                            <div class="col-md-4"><strong>Basement:</strong> ${search.basement ? 'Yes' : 'No'}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><strong>Air Conditioning:</strong> ${search.airconditioning ? 'Yes' : 'No'}</div>
                            <div class="col-md-4"><strong>Just Listed:</strong> ${search.just_listed ? 'Yes' : 'No'}</div>
                            <div class="col-md-4"><strong>Front Porch:</strong> ${search.frontporch ? 'Yes' : 'No'}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><strong>Patio:</strong> ${search.patio ? 'Yes' : 'No'}</div>
                            <div class="col-md-4"><strong>Lake:</strong> ${search.lake ? 'Yes' : 'No'}</div>
                            <div class="col-md-4"><strong>Playground:</strong> ${search.playground ? 'Yes' : 'No'}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><strong>Street Lights:</strong> ${search.streetlights ? 'Yes' : 'No'}</div>
                            <div class="col-md-4"><strong>Pool:</strong> ${search.pool ? 'Yes' : 'No'}</div>
                            <div class="col-md-4"><strong>Laundry:</strong> ${search.laundry ? 'Yes' : 'No'}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><strong>Gazebo:</strong> ${search.gazebo ? 'Yes' : 'No'}</div>
                            <div class="col-md-4"><strong>Clubhouse:</strong> ${search.clubhouse ? 'Yes' : 'No'}</div>
                            <div class="col-md-4"><strong>Balcony:</strong> ${search.balcony ? 'Yes' : 'No'}</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="closeModalBtn" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>`;
        document.body.insertAdjacentHTML('beforeend', modal);
    
        document.getElementById('closeModalBtn').addEventListener('click', function() {
            const modal = document.getElementById('searchDetailsModal');
            modal.parentNode.removeChild(modal);
        });
    
        $('#searchDetailsModal').modal('show');
    }

    function createPaginationLinks(paginationData) {
            var paginationHtml = '<ul class="pagination">';
            $.each(paginationData.links, function(index, link) {
                if (link.url) {
                    paginationHtml +=
                        '<li class="page-item' + (link.active ? ' active' : '') +
                        '"><a class="page-link" onClick="populateSavedSearchTable(\'' + link.url +
                        '\')" href="javascript:void(0)">' +
                        link.label + '</a></li>';
                } else {
                    paginationHtml +=
                        '<li class="page-item disabled"><span class="page-link">' +
                        link.label + '</span></li>';
                }
            });
            paginationHtml += '</ul>';
            $('#pagination-links').html(paginationHtml);
        }

        function deleteSearch(searchId) {

            Swal.fire({
                title: 'Are you sure?',
                text: 'Are you sure you want to delete this search?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#10579f',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {

                    var baseUrl = "{{ env('BACKEND_URL', 'http://myproagents.com') }}";
                    var id = "{{ $userData['id'] }}";
                    var urls = baseUrl + '/api/agents/getsavesearch/' + id;
                    $.ajax({
                        url: `/deleteSearch/${searchId}`,
                        method: 'DELETE',
                        success: function(data) {

                            populateSavedSearchTable(urls);
                            Swal.fire(
                                'Deleted!',
                                'Your search has been deleted.',
                                'success'
                            );
                        },
                        error: function(xhr, status, error) {

                            console.error('Failed to delete saved search:', error);
                            Swal.fire(
                                'Error!',
                                'Failed to delete the search.',
                                'error'
                            );
                        }
                    });
                }
            });
        }



       function createPaginationLink(response) {
            var paginationLinks = response.login_info.links;
            var paginationHtml = '';

            paginationHtml += '<nav aria-label="Page navigation">';
            paginationHtml += '<ul class="pagination justify-content-center">';

            // Previous Page Link
            if (paginationLinks.find(link => link.label === '&laquo; Previous')) {
                paginationHtml +=
                    '<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="nextpageurl(\'' +
                    paginationLinks.find(link => link.label === '&laquo; Previous').url + '\')">&laquo; Previous</a></li>';
            } else {
                paginationHtml += '<li class="page-item disabled"><span class="page-link">&laquo; Previous</span></li>';
            }

            // First Page Link
            if (paginationLinks.find(link => link.label === '1')) {
                if (response.login_info.current_page === 1) {
                    paginationHtml += '<li class="page-item active"><span class="page-link">1</span></li>';
                } else {
                    paginationHtml +=
                        '<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="nextpageurl(\'' +
                        paginationLinks.find(link => link.label === '1').url + '\')">1</a></li>';
                }
            }

            if (response.login_info.last_page > 1) {
                if (response.login_info.current_page > 3) {
                    paginationHtml += '<li class="page-item disabled"><span class="page-link">...</span></li>';
                }

                // Middle Pages
                for (var i = Math.max(2, response.login_info.current_page - 1); i <= Math.min(response.login_info
                        .last_page - 1,
                        response.login_info.current_page + 1); i++) {
                    if (paginationLinks.find(link => link.label === i.toString())) {
                        if (i === response.login_info.current_page) {
                            paginationHtml += '<li class="page-item active"><span class="page-link">' + i + '</span></li>';
                        } else {
                            paginationHtml +=
                                '<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="nextpageurl(\'' +
                                paginationLinks.find(link => link.label === i.toString()).url + '\')">' + i + '</a></li>';
                        }
                    }
                }


                if (response.login_info.current_page < response.login_info.last_page - 2) {
                    paginationHtml += '<li class="page-item disabled"><span class="page-link">...</span></li>';
                }


                if (paginationLinks.find(link => link.label === response.login_info.last_page.toString())) {
                    if (response.login_info.current_page === response.login_info.last_page) {
                        paginationHtml += '<li class="page-item active"><span class="page-link">' + response.login_info
                            .last_page + '</span></li>';
                    } else {
                        paginationHtml +=
                            '<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="nextpageurl(\'' +
                            paginationLinks.find(link => link.label === response.login_info.last_page.toString()).url +
                            '\')">' + response.login_info.last_page + '</a></li>';
                    }
                }
            }

            if (paginationLinks.find(link => link.label === 'Next &raquo;')) {
                paginationHtml +=
                    '<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="nextpageurl(\'' +
                    paginationLinks.find(link => link.label === 'Next &raquo;').url + '\')">Next &raquo;</a></li>';
            } else {
                paginationHtml += '<li class="page-item disabled"><span class="page-link">Next &raquo;</span></li>';
            }

            paginationHtml += '</ul>';
            paginationHtml += '</nav>';

            $('#pagination-link').html(paginationHtml);
        }


        function nextpageurl(url) {
            $.ajax({
                url: url,
                type: "GET",
                dataType: "json",
                success: function(response) {
                    console.log(response);
                    createPaginationLink(response);
                    var loginInfo = response.login_info;
                    var tbody = document.querySelector("#login-info-table tbody");
                    tbody.innerHTML = "";

                    if (loginInfo.data && loginInfo.data.length > 0) {
                        var currentPage = loginInfo.current_page;
                        var recordsPerPage = loginInfo.per_page;
                        var startSerial = (currentPage - 1) * recordsPerPage + 1;

                        loginInfo.data.forEach(function(login, index) {
                            var row = document.createElement("tr");
                            row.innerHTML = "<td>" + (startSerial + index) + "</td><td>" + login
                                .login_timestamp
                                .split(' ')[0] + "</td><td>" + login.login_timestamp.split(' ')[1] +
                                "</td>";
                            tbody.appendChild(row);
                        });
                    } else {
                        tbody.innerHTML =
                            '<tr><td colspan="3" style="text-align:center">NO data FOUND</td></tr>';
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching data:", error);
                }
            });
        }
        var baseUrl = "{{ env('BACKEND_URL', 'http://myproagents.com') }}";
        var user_id = "{{ $userData['id'] }}";
        nextpageurl(baseUrl + '/api/lead/getlogininfo/' + user_id)


        getfavproperty('/get-fav');

        function getfavproperty(url) {
            var user_id = "{{ $userData['id'] }}";

            $.ajax({
                url: url,
                type: "GET",
                data: {
                    user_id: user_id
                },
                dataType: "json",
                success: function(data) {

                    displayDiamondProperties(data.favorite_properties);
                    if (data.favorite_properties.data.length > 0) {

                        createpaginations(data.favorite_properties.links);
                    }

                },
                error: function(xhr, status, error) {
                    console.error("Error fetching data:", error);
                }
            });
        }

        function createpaginations(links) {

            var paginationHtml = '<ul class="pagination">';

            $.each(links, function(index, link) {
                if (link.url) {
                    paginationHtml +=
                        '<li class="page-item' + (link.active ? ' active' : '') +
                        '"><a class="page-link" onClick="getfavproperty(\'' + link.url +
                        '\')" href="javascript:void(0)">' +
                        link.label + '</a></li>';
                } else {
                    paginationHtml +=
                        '<li class="page-item disabled"><span class="page-link">' +
                        link.label + '</span></li>';
                }
            });
            paginationHtml += '</ul>';
            $('#paginations').html(paginationHtml);
        }

        function displayDiamondProperties(properties) {
            console.log(properties);
            var header = '{{ env('BACKEND_URL') }}';
            const formatter = new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'USD',
                minimumFractionDigits: 0,
            });
            var diamondListingsDiv = document.getElementById('diamond_listings');
            diamondListingsDiv.innerHTML = '';
            if (properties.data.length === 0) {
                diamondListingsDiv.innerHTML =
                    '<p style="text-align:center; font-weight:bolder;">OOPS! NO LISTINGS FOUND</p>';

                return;
            }
            properties.data.forEach(property => {
                var UnparsedAddress = '';

                if (property.StreetNumber) {
                    UnparsedAddress += property.StreetNumber;
                }

                if (property.StreetDirPrefix) {
                    UnparsedAddress += ' ' + property.StreetDirPrefix;
                }

                if (property.StreetName) {
                    UnparsedAddress += ' ' + property.StreetName;
                }

                if (property.StreetSuffix) {
                    UnparsedAddress += ' ' + property.StreetSuffix;
                }

                if (property.UnitNumber) {
                    UnparsedAddress += ' ' + property.UnitNumber;
                }



                var listingDiv = document.createElement('div');
                listingDiv.className = 'col-12 col-md-6 col-lg-6 col-xl-6';
                listingDiv.innerHTML = `
            <div class="listing-style5">
                <div class="list-thumb">
                <a href="{{ url('') }}/property-detail/${property.slug_url || property.ListingId}" title="Preview" target="_blank">
                    <img src="${property.image_url ? property.image_url : '{{ asset('images/no_image.jpg') }}'}" alt="${property.ListingId}" onerror="this.src='{{ asset('images/no_image.jpg') }}';">
                </a>
                    ${property.diamond == 1 ?
              `<div class="list-tag fz12">
                                                  <i class="fa-thin fa-gem me-2"></i>Diamond
                                              </div>` :
              property.featured == 1?
              `<div class="list-tag fz12">
                                                  <i class="fa-thin fa-star me-2"></i>Exclusive
                                              </div>` :
              
              ''}        
                    <div class="list-meta2">
                        <a href="javascript:void(0)" 
   data-bs-toggle="tooltip" 
   data-bs-placement="top" 
   title="Favourite" 
   class="set-as-fav"
   onclick="toggleFavorite('${property.ListingId}')">
   <span class="flaticon-like" id="fav-icon-${property.ListingId}" style="background-color: white;"></span>
</a>

                        
                    </div>
                </div>
                <a href="{{ url('') }}/property-detail/${property.slug_url || property.ListingId}" title="Preview" target="_blank">
                <div class="list-content">
                        <div class="list-price mb-2">
                            ${
                                property.PropertyType === 'Commercial' && property.LeaseAmount && property.LeaseAmountFrequency
                                ? `${formatter.format(property.LeaseAmount)} / ${property.LeaseAmountFrequency}${property.LeaseMeasure ? ' / ' + property.LeaseMeasure : ''}`
                                : `${formatter.format(property.ListPrice)}`
                            }
                        </div>
                    <h6 class="list-title">
                        ${UnparsedAddress?UnparsedAddress+', ' :''}${property.City ? property.City + ', ' : ''}${property.StateOrProvince}</h6>
                        
                    <p class="list-text">${property.PropertyType}</p>
                    <div class="list-meta d-flex align-items-center gap-3">
                        ${property.BedroomsTotal ? `<p><span class="flaticon-bed"></span>${property.BedroomsTotal} bed</p>` : ''}

 ${(Number(property.BathroomsFull || 0) > 0 || Number(property.BathroomsHalf || 0) > 0) 
    ? `<p><span class="flaticon-shower"></span>
         ${Number(property.BathroomsFull || 0) + Number(property.BathroomsHalf || 0)} bath${(Number(property.BathroomsFull || 0) + Number(property.BathroomsHalf || 0)) > 1 ? '' : ''}
       </p>` 
    : ''}                  
                          
                          ${property.BuildingAreaTotalSF ? `<p><span class="flaticon-expand"></span>${Math.floor(property.BuildingAreaTotalSF)} sqft</p>` : (property.LivingAreaSF ? `<p><span class="flaticon-expand"></span>${Math.floor(property.LivingAreaSF)} sqft</p>` : '')}
                    </div>
                    <span class="mlsNumber">MLS&reg; Number: ${property.ListingId}</span>
                </div>
                </a>
            </div>
        `;
                diamondListingsDiv.appendChild(listingDiv);
            });
        }


        function addToFavorites(propertyId, favoriteStatus, icons) {
            var session = "{{ session('username') }}";

            if (!session) {
                $.toast({
                    heading: 'Error',
                    text: 'Please login to set as favorite',
                    showHideTransition: 'slide',
                    icon: 'error',
                    loaderBg: '#f2a654',
                    position: 'top-right'
                });
                $('#exampleModalToggle').modal('show');
            }

            var userId = "{{ session('user_id') }}";
            $.ajax({
                url: "{{ route('add_to_favorites') }}",
                type: 'POST',
                data: {
                    property_id: propertyId,
                    favorite: favoriteStatus,
                    user_id: userId
                },
                success: function(response) {
                    console.log('Toggle successful');

                    $.toast({
                        text: 'Property removed from favorites',
                        showHideTransition: 'slide',
                        icon: 'success',
                        loaderBg: '#f2a654',
                        position: 'top-right'
                    });

                    if (favoriteStatus) {
                        icons.classList.add('filled');
                    } else {
                        icons.classList.remove('filled');
                    }
                    getfavproperty('/get-fav');
                },
                error: function(xhr, status, error) {
                    console.error('Toggle failed');
                }
            });
        }

        function toggleFavorite(listingId) {
            var icon = document.getElementById('fav-icon-' + listingId);
            icon.classList.toggle('filled');
            addToFavorites(listingId, 0, icon);
        }
    </script>
@endsection