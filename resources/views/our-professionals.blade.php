@extends('layouts.pages')
@section('content')
    <link href="{{ asset('frontend/css/our-prof.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css" rel="stylesheet" />

    <body>
        <div class="banner">
            <div class="overlay">
                <div class="container banner-text">
                    <h1 class="mt-3">Our Professionals</h1>
                    <!-- <p>Awesome Real Estate Company for Housing and Construction.</p> -->
                    <div class="container filter mt-5">
                        <div class="">
                            <div class="row">
                                {{-- <div class="col-12 col-sm-5 px-1">
                <div class="name-input">
                  <i class="ri-search-line"></i>
                  <input type="text" id="searchInput" name="search" placeholder="Enter agent name">
                  <ul id="suggestionsList"></ul>
                </div>
              </div> --}}
                                <div class="col-12 col-sm-12 px-1 mb-sm-3 m-res">
                                    <div class="name-input email-input position-relative  res-h">
                                        <div class="px-0 col-12 col-sm-12 col-md-12">
                                            <input type=""
                                                placeholder="REALTORS&#174; Name - Search by first, last or full name"
                                                id="searchInput" name="search" class="search">
                                            <ul id="suggestionsList"></ul>
                                        </div>
                                   
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <!-- <div class="col-sm-1 col-md-2"></div> -->

                                {{-- <div class="col-6 col-sm mt-2 mt-sm-0 px-1">

                                    <div class="name-input elemm" >
                                        <select name="cars" id="positionsSelect" class="select-boxes-filter">
                                            <option value="">Specialization</option>
                                        </select>
                                    </div>
                                </div> --}}


                                <div class="col-6 col-sm-6 mt-2 mt-sm-0 px-1 language-filt ">
                                    <div class="name-input elemm">
                                        <div class="checkbox-dropdown" id="scrolling">
                                        Filter by Language Spoken
                                            <i class="ri-arrow-down-s-line"></i>
                                            <ul class="checkbox-dropdown-list">

                                            </ul>
                                        </div>


                                    </div>

                                </div>

                                {{-- <div class="col-6 col-sm mt-2 mt-sm-0 px-1  ">
                                    <div class="name-input elemm">
                                        <select name="cars" id="officeSelect" class="select-boxes-filter">
                                            <option value="">All Office</option>
                                            <option value="1297353">North</option>
                                            <option value="1298083">South</option>
                                        </select>
                                    </div>
                                </div> --}}
                                <div class="col-6 col-sm-3 px-1 col-md-3 reset-btn">
                                            <!-- <i class="ri-refresh-line"></i> -->
                                            <button class=' cursor-pointer reset-btnn '>Reset</button>
                                        </div>
                                          
                                        <div class="search-btn col-12 col-sm-3 col-md-3 px-1 text-end">
                                            <button class=" ud-btn  blue-btn" onclick="searchAgents()"
                                                id="searchInputss">Search</button>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid agents">
            <div class="container p-0 " id='professionals'>
                <!-- <h6>Our Professionals</h6>xam -->
                <div class="sortby">
                    <div class='sortby-div'>
                        <select id="sortSelect">
                            <option value="">Sort By</option>
                            <option value="asc">Name A-Z</option>
                            <option value="desc">Name Z-A</option>
                        </select>
                    </div>
                </div>
                <div class="row" id="agentList">
                </div>
                <br>
                <nav aria-label="Agent Pagination">
                    <div class="mbp_pagination text-center">

                        <ul id="pagination" class="page_navigation"></ul>
                        <p class="mt10 pagination_page_count text-center">
                        </p>
                        <!-- Pagination count information will be updated here -->
                        </p>
                    </div>
                </nav>


            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    </body>



    <script>
//         document.addEventListener("keydown", function(event) {
//             if (event.key === "Enter") {

//                 event.preventDefault();

//                 document.getElementById("searchInputss").click();
//             }
//         });

//         document.querySelector('.checkbox-dropdown').addEventListener('click', function(event) {
//             var checkboxDropdown = this;
//             checkboxDropdown.classList.toggle('is-active');
//             event.stopPropagation();

//             // Stop propagation for label clicks
//             checkboxDropdown.querySelector('.checkbox-dropdown-list').addEventListener('click', function(event) {
//                 event.stopPropagation();
//             });
//         });


//         // document.querySelector('.checkbox-dropdown label').addEventListener('click', function(event) {
//         //   alert('yes');
//         //     event.stopPropagation();
//         // });

//         window.addEventListener('click', function(event) {
//             if (!event.target.closest('.checkbox-dropdown') && !event.target.matches(
//                     '.checkbox-dropdown-list input[type="checkbox"]')) {
//                 var suggestionsList = document.getElementById('suggestionsList');
//                 suggestionsList.innerHTML = '';
//                 var checkboxDropdown = document.querySelector('.checkbox-dropdown');
//                 checkboxDropdown.classList.remove('is-active');
//             }
//         });


//         // var header =  'http://127.0.0.1:8000';

//         var header = '{{ env('BACKEND_URL') }}';

//         const apiUrl = header + '/api/agents/list';

//         function fetchAgents(url) {
//             fetch(url).then(response => {
//                 if (!response.ok) {
//                     throw new Error('Network response was not ok');
//                 }
//                 return response.json();
//             }).then(data => {

//                 // const sortSelect = document.getElementById('scrolling');
//                 // sortSelect.scrollIntoView({
//                 //     behavior: 'smooth',
//                 //     block: 'start'
//                 // });

//                 var sortSelects = document.getElementById('sortSelect');
//                 var sortBys = sortSelects.value;
//                 console.log(sortBys);

//                 document.getElementById('agentList').innerHTML = '';

//                 data.data.forEach(agent => {

//                     const agentContainer = document.getElementById('agentList');
//                     const tempDiv = document.createElement('div');

//                     tempDiv.innerHTML = `<div class="col-12 col-sm-6 col-lg-3"> <div class="agent-in mt-4"> <div class="container profile-sec position-relative p-0"> <div class="row"> <div class="col-12 col-sm-12 profile-img position-relative"> <div class="agent-pics"> <a href="{{ url('') }}/our-professionals/details/${agent.slug_url}">
 
//   <img src="${agent.profile_picture ? `${agent.profile_picture}` : '{{ asset('images/no_image.jpg') }}'}" alt="${agent.name}" onerror="this.src='{{ asset('images/no_image.jpg') }}';"> </a> </div> </div> <div class="col-12 col-sm-12 profile-delt mt-3 mt-sm-0"> <div class="profile-delt px-3"> <div class="d-flex align-items-start justify-content-between"> <a href="{{ url('') }}/our-professionals/details/${agent.slug_url}">
 
//   <h5>${agent.name} </h5> </a> <div class="d-flex gap-2"> <a href="mailto:${agent.email}"><i class="fa-light fa-envelope"></i></a> <a href="tel:${agent.phone}"><i class="fa-light fa-phone"></i></a> </div> </div> <p>${agent.position} </p> 
 
//   </div> </div> </div> </div> </div> </div>
 
//  `;

//                     const agentDiv = tempDiv.firstChild;
//                     agentContainer.appendChild(agentDiv);

//                 });
//                 if (data.meta) {
//                     const paginationContainer = document.getElementById('pagination');
//                     const currentPage = data.meta.current_page;
//                     const perPage = data.meta.per_page;
//                     const totalAgents = data.total_count;

//                     const startAgentIndex = (currentPage - 1) * perPage + 1;
//                     const endAgentIndex = Math.min(currentPage * perPage, totalAgents);

//                     let paginationHtml = '';

//                     if (currentPage > 1) {
//                         paginationHtml +=
//                             `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="fetchAgents('${data.links.first}&sort=${sortBys}')"><i class="fa fa-angle-double-left"></i></a></li>`;
//                         paginationHtml +=
//                             `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="fetchAgents('${data.links.prev}&sort=${sortBys}')"><i class="fa fa-angle-left"></i></a></li>`;
//                     } else {
//                         paginationHtml +=
//                             `<li class="page-item disabled"><span class="page-link"><i class="fa fa-angle-double-left"></i></span></li>`;
//                         paginationHtml +=
//                             `<li class="page-item disabled"><span class="page-link"><i class="fa fa-angle-left"></i></span></li>`;
//                     }

//                     const startPage = Math.max(1, currentPage - 2);
//                     const endPage = Math.min(Math.ceil(totalAgents / perPage), currentPage + 2);

//                     for (let i = startPage; i <= endPage; i++) {
//                         if (i === currentPage) {
//                             paginationHtml +=
//                                 `<li class="page-item active"><span class="page-link">${i}</span></li>`;
//                         } else {
//                             paginationHtml +=
//                                 `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="fetchAgents('${header}/api/agents/list?page=${i}&sort=${sortBys}')">${i}</a></li>`;
//                         }
//                     }

//                     if (currentPage < Math.ceil(totalAgents / perPage)) {
//                         paginationHtml +=
//                             `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="fetchAgents('${data.links.next}&sort=${sortBys}')"><i class="fa fa-angle-right"></i></a></li>`;
//                         paginationHtml +=
//                             `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="fetchAgents('${header}/api/agents/list?page=${Math.ceil(totalAgents / perPage)}&sort=${sortBys}')"><i class="fa fa-angle-double-right"></i></a></li>`;
//                     } else {
//                         paginationHtml +=
//                             `<li class="page-item disabled"><span class="page-link"><i class="fa fa-angle-right"></i></span></li>`;
//                         paginationHtml +=
//                             `<li class="page-item disabled"><span class="page-link"><i class="fa fa-angle-double-right"></i></span></li>`;
//                     }

//                     paginationContainer.innerHTML = paginationHtml;

//                     const paginationCountContainer = document.querySelector('.pagination_page_count');
//                     paginationCountContainer.textContent =
//                     `${startAgentIndex} - ${endAgentIndex} of ${totalAgents} REALTORS®️ available`;
//                 }

//             }).catch(error => {
//                 console.error('There was a problem with the fetch operation:', error);
//             });

//         }

//         function searchAgents() {
//             const searchKey = document.querySelector('input[name="search"]').value.trim();
//             const languageCheckboxes = document.querySelectorAll('.checkbox-dropdown-list input[type="checkbox"]');
//             const positionSelect = document.getElementById('positionsSelect');
//             const officeSelect = document.getElementById('officeSelect');

//             const selectedLanguages = [];
//             languageCheckboxes.forEach(checkbox => {
//                 if (checkbox.checked) {
//                     selectedLanguages.push(checkbox.value.trim());
//                 }
//             });

//             const language = selectedLanguages.join(',');

//             const position = positionSelect ? positionSelect.value.trim() : '';
//             const office = officeSelect ? officeSelect.value.trim() : '';

//             const searchParams = new URLSearchParams();
//             searchParams.append('search', searchKey);
//             searchParams.append('language', language);
//             searchParams.append('position', position);
//             searchParams.append('office_key', office);

//             const searchUrl = `${apiUrl}?${searchParams.toString()}`;
//             fetchAgents(searchUrl);
//         }

//         function handleSortChange() {
//             const sortSelect = document.getElementById('sortSelect');
//             const sortBy = sortSelect.value;

//             const searchKey = document.querySelector('input[name="search"]').value.trim();

//             const positionSelect = document.getElementById('positionsSelect');
//             const officeSelect = document.getElementById('officeSelect');

//             const selectedLanguages = [];

//             const language = selectedLanguages.join(',');

//             const position = positionSelect ? positionSelect.value.trim() : '';
//             const office = officeSelect ? officeSelect.value.trim() : '';

//             const searchParams = new URLSearchParams();
//             searchParams.append('search', searchKey);

//             searchParams.append('position', position);
//             searchParams.append('office_key', office);

//             const searchUrl = `${apiUrl}?${searchParams.toString()}&sort=${sortBy}`;
//             fetchAgents(searchUrl);
//         }

//         const sortSelection = document.getElementById('sortSelect');
//         sortSelection.addEventListener('change', handleSortChange);

//         function clearFilters() {
//             const suggestionsLists = document.getElementById('suggestionsList');
//             if (suggestionsLists) {
//                 suggestionsLists.innerHTML = '';
//             }

//             document.querySelector('input[name="search"]').value = '';

//             const languageCheckboxes = document.querySelectorAll('.checkbox-dropdown-list input[type="checkbox"]');
//             languageCheckboxes.forEach(checkbox => {
//                 checkbox.checked = false;
//             });

//             const positionsSelect = document.getElementById('positionsSelect');
//             if (positionsSelect) {
//                 positionsSelect.selectedIndex = 0;
//             }

//             const officeSelect = document.getElementById('officeSelect');
//             if (officeSelect) {
//                 officeSelect.selectedIndex = 0;
//             }

//             fetchAgents(apiUrl);
//             searchAgents();
//         }

//         const sortSelect = document.getElementById('sortSelect');
//         sortSelect.addEventListener('change', handleSortChange);

//         document.querySelector('.reset-btn').addEventListener('click', clearFilters);

//         fetchAgents(apiUrl);

//         var api_language_positions = header + '/api/agents/language-and-position';

//         function populatelanguageAndpositions() {
//             fetch(api_language_positions).then(response => {
//                 if (!response.ok) {
//                     throw new Error('Network response was not ok');
//                 }
//                 return response.json();
//             }).then(data => {
//                 const checkboxDropdownList = document.querySelector('.checkbox-dropdown-list');
//                 const uniqueLanguages = new Set();
        
//                 // Collect unique languages
//                 data.language.forEach(language => {
//                     language.split(',').forEach(lang => {
//                         const trimmedLang = lang.trim();
//                         if (trimmedLang !== "" && trimmedLang !== null) {
//                             uniqueLanguages.add(trimmedLang);
//                         }
//                     });
//                 });
        
//                 // Convert Set to Array and sort alphabetically
//                 const sortedLanguages = Array.from(uniqueLanguages).sort();
        
//                 // Populate the checkbox list
//                 sortedLanguages.forEach(lang => {
//                     const li = document.createElement('li');
//                     const label = document.createElement('label');
//                     const input = document.createElement('input');
//                     input.type = 'checkbox';
//                     input.value = lang;
//                     input.name = 'language';
//                     label.appendChild(input);
//                     label.appendChild(document.createTextNode(lang));
//                     li.appendChild(label);
//                     checkboxDropdownList.appendChild(li);
//                 });
        
//                 const positionsSelect = document.getElementById('positionsSelect');
//                 data.positions.forEach(position => {
//                     const option = document.createElement('option');
//                     option.value = position;
//                     option.text = position;
//                     positionsSelect.appendChild(option);
//                 });
//             }).catch(error => {
//                 console.error('There was a problem with fetching language and positions:', error);
//             });
//         }



//         populatelanguageAndpositions();

//         function fetchAgentNameSuggestions(inputValue) {
//             const apiUrl = `${header}/api/agents/get-name-mls?key=${inputValue}`;

//             fetch(apiUrl).then(response => {
//                 if (!response.ok) {
//                     throw new Error('Network response was not ok');
//                 }
//                 return response.json();
//             }).then(data => {

//                 const suggestionsList = document.getElementById('suggestionsList');
//                 suggestionsList.innerHTML = '';

//                 if (Object.keys(data.suggested_agents).length === 0) {

//                     suggestionsList.innerHTML = '';
//                     return;
//                 }

//                 const suggestedAgents = data.suggested_agents;

//                 for (const mlsId in suggestedAgents) {
//                     const agentName = suggestedAgents[mlsId];
//                     const listItem = document.createElement('li');
//                     listItem.textContent = `${agentName}`;
//                     listItem.dataset.agentName = agentName;
//                     listItem.classList.add('name-input');
//                     suggestionsList.appendChild(listItem);

//                     listItem.addEventListener('click', function() {
//                         const clickedAgentName = this.dataset.agentName;
//                         document.getElementById('searchInput').value = clickedAgentName;
//                         suggestionsList.innerHTML = '';
//                     });
//                 }
//             }).catch(error => {
//                 console.error('There was a problem with the fetch operation:', error);
//             });
//         }

//         let selectedSuggestionIndex = -1;

//         document.getElementById('searchInput').addEventListener('keydown', function(event) {
//             const suggestions = document.querySelectorAll('.name-input');

//             if (event.key === 'ArrowDown' && selectedSuggestionIndex < suggestions.length - 1) {

//                 selectedSuggestionIndex++;
//                 updateSelectedSuggestion(suggestions);
//             } else if (event.key === 'ArrowUp' && selectedSuggestionIndex > 0) {

//                 selectedSuggestionIndex--;
//                 updateSelectedSuggestion(suggestions);
//             } else if (event.key === 'Enter' && selectedSuggestionIndex > -1) {

//                 const clickedAgentName = suggestions[selectedSuggestionIndex].dataset.agentName;
//                 document.getElementById('searchInput').value = clickedAgentName;
//                 suggestionsList.innerHTML = '';
//             }
//         });

//         function updateSelectedSuggestion(suggestions) {

//             suggestions.forEach(suggestion => {
//                 suggestion.classList.remove('selected');
//             });

//             suggestions[selectedSuggestionIndex].classList.add('selected');
//         }

//         function handleSearchKeyup(event) {
//             const searchInput = event.target.value.trim();

//             const suggestionsList = document.getElementById('suggestionsList');

//             if (searchInput === '') {

//                 suggestionsList.innerHTML = '';
//                 return;
//             }

//             if (searchInput.length >= 1) {
//                 fetchAgentNameSuggestions(searchInput);
//             }
//         }

//         document.getElementById('searchInput').addEventListener('keyup', handleSearchKeyup);
//     </script>
 <script>
        document.addEventListener("keydown", function(event) {
            if (event.key === "Enter") {

                event.preventDefault();

                document.getElementById("searchInputss").click();
            }
        });

        document.querySelector('.checkbox-dropdown').addEventListener('click', function(event) {
            var checkboxDropdown = this;
            checkboxDropdown.classList.toggle('is-active');
            event.stopPropagation();

            // Stop propagation for label clicks
            checkboxDropdown.querySelector('.checkbox-dropdown-list').addEventListener('click', function(event) {
                event.stopPropagation();
            });
        });


        // document.querySelector('.checkbox-dropdown label').addEventListener('click', function(event) {
        //   alert('yes');
        //     event.stopPropagation();
        // });

        window.addEventListener('click', function(event) {
            if (!event.target.closest('.checkbox-dropdown') && !event.target.matches(
                    '.checkbox-dropdown-list input[type="checkbox"]')) {
                var suggestionsList = document.getElementById('suggestionsList');
                suggestionsList.innerHTML = '';
                var checkboxDropdown = document.querySelector('.checkbox-dropdown');
                checkboxDropdown.classList.remove('is-active');
            }
        });


        // var header =  'http://127.0.0.1:8000';

        var header = '{{ env('BACKEND_URL') }}';

        const apiUrl = header + '/api/agents/list';

        function fetchAgents(url) {
            fetch(url).then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            }).then(data => {

                const sortSelect = document.getElementById('scrolling');
                sortSelect.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });

                var sortSelects = document.getElementById('sortSelect');
                var sortBys = sortSelects.value;
                console.log(sortBys);

                document.getElementById('agentList').innerHTML = '';

                data.data.forEach(agent => {

                    const agentContainer = document.getElementById('agentList');
                    const tempDiv = document.createElement('div');

                    tempDiv.innerHTML = `<div class="col-12 col-sm-6 col-lg-3"> <div class="agent-in mt-4"> <div class="container profile-sec position-relative p-0"> <div class="row"> <div class="col-12 col-sm-12 profile-img position-relative"> <div class="agent-pics"> <a href="{{ url('') }}/our-professionals/details/${agent.slug_url}">
 
  <img src="${agent.profile_picture ? `${agent.profile_picture}` : '{{ asset('images/no_image.jpg') }}'}" alt="${agent.name}" onerror="this.src='{{ asset('images/no_image.jpg') }}';"> </a> </div> </div> <div class="col-12 col-sm-12 profile-delt mt-3 mt-sm-0"> <div class="profile-delt px-3"> <div class="d-flex align-items-start justify-content-between"> <a href="{{ url('') }}/our-professionals/details/${agent.slug_url}">
 
  <h5>${agent.name} </h5> </a> <div class="d-flex gap-2"> <a href="mailto:${agent.email}"><i class="fa-light fa-envelope"></i></a> <a href="tel:${agent.phone}"><i class="fa-light fa-phone"></i></a> </div> </div> <p>${agent.position ? agent.position.toUpperCase() : ''} </p> 
 
  </div> </div> </div> </div> </div> </div>
 
 `;

                    const agentDiv = tempDiv.firstChild;
                    agentContainer.appendChild(agentDiv);

                });
                if (data.meta) {
                    const paginationContainer = document.getElementById('pagination');
                    const currentPage = data.meta.current_page;
                    const perPage = data.meta.per_page;
                    const totalAgents = data.total_count;

                    const startAgentIndex = (currentPage - 1) * perPage + 1;
                    const endAgentIndex = Math.min(currentPage * perPage, totalAgents);

                    let paginationHtml = '';

                    if (currentPage > 1) {
                        paginationHtml +=
                            `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="fetchAgents('${data.links.first}&sort=${sortBys}')"><i class="fa fa-angle-double-left"></i></a></li>`;
                        paginationHtml +=
                            `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="fetchAgents('${data.links.prev}&sort=${sortBys}')"><i class="fa fa-angle-left"></i></a></li>`;
                    } else {
                        paginationHtml +=
                            `<li class="page-item disabled"><span class="page-link"><i class="fa fa-angle-double-left"></i></span></li>`;
                        paginationHtml +=
                            `<li class="page-item disabled"><span class="page-link"><i class="fa fa-angle-left"></i></span></li>`;
                    }

                    const startPage = Math.max(1, currentPage - 2);
                    const endPage = Math.min(Math.ceil(totalAgents / perPage), currentPage + 2);

                    for (let i = startPage; i <= endPage; i++) {
                        if (i === currentPage) {
                            paginationHtml +=
                                `<li class="page-item active"><span class="page-link">${i}</span></li>`;
                        } else {
                            paginationHtml +=
                                `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="fetchAgents('${header}/api/agents/list?page=${i}&sort=${sortBys}')">${i}</a></li>`;
                        }
                    }

                    if (currentPage < Math.ceil(totalAgents / perPage)) {
                        paginationHtml +=
                            `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="fetchAgents('${data.links.next}&sort=${sortBys}')"><i class="fa fa-angle-right"></i></a></li>`;
                        paginationHtml +=
                            `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="fetchAgents('${header}/api/agents/list?page=${Math.ceil(totalAgents / perPage)}&sort=${sortBys}')"><i class="fa fa-angle-double-right"></i></a></li>`;
                    } else {
                        paginationHtml +=
                            `<li class="page-item disabled"><span class="page-link"><i class="fa fa-angle-right"></i></span></li>`;
                        paginationHtml +=
                            `<li class="page-item disabled"><span class="page-link"><i class="fa fa-angle-double-right"></i></span></li>`;
                    }

                    paginationContainer.innerHTML = paginationHtml;

                    const paginationCountContainer = document.querySelector('.pagination_page_count');
                    paginationCountContainer.innerHTML =
                        `${startAgentIndex} - ${endAgentIndex} of ${totalAgents} REALTORS<span>&#174;</span> available`;
                }

            }).catch(error => {
                console.error('There was a problem with the fetch operation:', error);
            });

        }

        function searchAgents() {
            const searchKey = document.querySelector('input[name="search"]').value.trim();
            const languageCheckboxes = document.querySelectorAll('.checkbox-dropdown-list input[type="checkbox"]');
            const positionSelect = document.getElementById('positionsSelect');
            // const officeSelect = document.getElementById('officeSelect');

            const selectedLanguages = [];
            languageCheckboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    selectedLanguages.push(checkbox.value.trim());
                }
            });

            const language = selectedLanguages.join(',');

            const position = positionSelect ? positionSelect.value.trim() : '';
            // const office = officeSelect ? officeSelect.value.trim() : '';

            const searchParams = new URLSearchParams();
            searchParams.append('search', searchKey);
            searchParams.append('language', language);
            searchParams.append('position', position);
            // searchParams.append('office_key', office);

            const searchUrl = `${apiUrl}?${searchParams.toString()}`;
            fetchAgents(searchUrl);
        }

        function handleSortChange() {
            const sortSelect = document.getElementById('sortSelect');
            const sortBy = sortSelect.value;

            const searchKey = document.querySelector('input[name="search"]').value.trim();

            const positionSelect = document.getElementById('positionsSelect');
            // const officeSelect = document.getElementById('officeSelect');

            const selectedLanguages = [];

            const language = selectedLanguages.join(',');

            const position = positionSelect ? positionSelect.value.trim() : '';
            // const office = officeSelect ? officeSelect.value.trim() : '';

            const searchParams = new URLSearchParams();
            searchParams.append('search', searchKey);

            searchParams.append('position', position);
            // searchParams.append('office_key', office);

            const searchUrl = `${apiUrl}?${searchParams.toString()}&sort=${sortBy}`;
            fetchAgents(searchUrl);
        }

        const sortSelection = document.getElementById('sortSelect');
        sortSelection.addEventListener('change', handleSortChange);

        function clearFilters() {
            const suggestionsLists = document.getElementById('suggestionsList');
            if (suggestionsLists) {
                suggestionsLists.innerHTML = '';
            }

            document.querySelector('input[name="search"]').value = '';

            const languageCheckboxes = document.querySelectorAll('.checkbox-dropdown-list input[type="checkbox"]');
            languageCheckboxes.forEach(checkbox => {
                checkbox.checked = false;
            });

            const positionsSelect = document.getElementById('positionsSelect');
            if (positionsSelect) {
                positionsSelect.selectedIndex = 0;
            }

            // const officeSelect = document.getElementById('officeSelect');
            // if (officeSelect) {
            //     officeSelect.selectedIndex = 0;
            // }

            fetchAgents(apiUrl);
            searchAgents();
        }

        const sortSelect = document.getElementById('sortSelect');
        sortSelect.addEventListener('change', handleSortChange);

        document.querySelector('.reset-btn').addEventListener('click', clearFilters);

        fetchAgents(apiUrl);

        var api_language_positions = header + '/api/agents/language-and-position';

        // function populatelanguageAndpositions() {
        //     fetch(api_language_positions).then(response => {
        //         if (!response.ok) {
        //             throw new Error('Network response was not ok');
        //         }
        //         return response.json();
        //     }).then(data => {
        //         const checkboxDropdownList = document.querySelector('.checkbox-dropdown-list');
        //         const uniqueLanguages = new Set();
        //         data.language.forEach(language => {
        //             language.split(',').forEach(lang => {
        //                 const trimmedLang = lang.trim();
        //                 if (trimmedLang !== "" && trimmedLang !== null) {
        //                     uniqueLanguages.add(trimmedLang);
        //                 }
        //             });
        //         });
                
                

        //         Array.from(uniqueLanguages).forEach(lang => {
        //             const li = document.createElement('li');
        //             const label = document.createElement('label');
        //             const input = document.createElement('input');
        //             input.type = 'checkbox';
        //             input.value = lang;
        //             input.name = 'language';
        //             label.appendChild(input);
        //             label.appendChild(document.createTextNode(lang));
        //             li.appendChild(label);
        //             checkboxDropdownList.appendChild(li);
        //         });

        //     }).catch(error => {
        //         console.error('There was a problem with fetching language and positions:', error);
        //     });
        // }
        
        
        function populatelanguageAndpositions() {
    fetch(api_language_positions).then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    }).then(data => {
        const checkboxDropdownList = document.querySelector('.checkbox-dropdown-list');
        const uniqueLanguages = new Set();

        // Collect unique languages
        data.language.forEach(language => {
            language.split(',').forEach(lang => {
                const trimmedLang = lang.trim();
                if (trimmedLang !== "" && trimmedLang !== null) {
                    uniqueLanguages.add(trimmedLang);
                }
            });
        });

        // Convert Set to Array and sort alphabetically
        const sortedLanguages = Array.from(uniqueLanguages).sort();

        // Populate the checkbox list
        sortedLanguages.forEach(lang => {
            const li = document.createElement('li');
            const label = document.createElement('label');
            const input = document.createElement('input');
            input.type = 'checkbox';
            input.value = lang;
            input.name = 'language';
            label.appendChild(input);
            label.appendChild(document.createTextNode(lang));
            li.appendChild(label);
            checkboxDropdownList.appendChild(li);
        });

        const positionsSelect = document.getElementById('positionsSelect');
        data.positions.forEach(position => {
            const option = document.createElement('option');
            option.value = position;
            option.text = position;
            positionsSelect.appendChild(option);
        });
    }).catch(error => {
        console.error('There was a problem with fetching language and positions:', error);
    });
}




        populatelanguageAndpositions();

        function fetchAgentNameSuggestions(inputValue) {
            const apiUrl = `${header}/api/agents/get-name-mls?key=${inputValue}`;

            fetch(apiUrl).then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            }).then(data => {
                console.log(data);
                const suggestionsList = document.getElementById('suggestionsList');
                suggestionsList.innerHTML = '';


                if (data.suggested_agents.length === 0) {
                    return;
                }

                const suggestedAgents = data.suggested_agents;


                for (const agent of suggestedAgents) {
                    console.log(agent);

                    const listItem = document.createElement('li');
                    listItem.textContent = agent.name;
                    listItem.classList.add('name-input');
                    listItem.dataset.slugUrl = agent.slug_url;
                    listItem.dataset.agentName = agent.name;
                    listItem.addEventListener('click', function() {
                        const slugUrl = this.dataset.slugUrl;
                        window.location.href =
                            `${window.location.origin}/our-professionals/details/${slugUrl}`;
                    });
                    suggestionsList.appendChild(listItem);
                }
            }).catch(error => {
                console.error('There was a problem with the fetch operation:', error);
            });
        }


        let selectedSuggestionIndex = -1;

        document.getElementById('searchInput').addEventListener('keydown', function(event) {
            const suggestions = document.querySelectorAll('.name-input');

            if (event.key === 'ArrowDown' && selectedSuggestionIndex < suggestions.length - 1) {
                selectedSuggestionIndex++;
                updateSelectedSuggestion(suggestions);
            } else if (event.key === 'ArrowUp' && selectedSuggestionIndex > 0) {
                selectedSuggestionIndex--;
                updateSelectedSuggestion(suggestions);
            } else if (event.key === 'Enter' && selectedSuggestionIndex > -1) {
                const clickedAgentName = suggestions[selectedSuggestionIndex].dataset
                .agentName; 
                document.getElementById('searchInput').value = clickedAgentName;
                const slugUrl = suggestions[selectedSuggestionIndex].dataset.slugUrl;
                window.location.href = `${window.location.origin}/our-professionals/details/${slugUrl}`;

                
                suggestionsList.innerHTML = '';
            }
        });

        function updateSelectedSuggestion(suggestions) {

            suggestions.forEach(suggestion => {
                suggestion.classList.remove('selected');
            });

            suggestions[selectedSuggestionIndex].classList.add('selected');
        }

        function handleSearchKeyup(event) {
            const searchInput = event.target.value.trim();

            const suggestionsList = document.getElementById('suggestionsList');

            if (searchInput === '') {

                suggestionsList.innerHTML = '';
                return;
            }

            if (searchInput.length >= 1) {
                fetchAgentNameSuggestions(searchInput);
            }
        }

        document.getElementById('searchInput').addEventListener('keyup', handleSearchKeyup);
    </script>

    </html>
@endsection