document.addEventListener('DOMContentLoaded', function () {
  
  // Call applyFiltersFromUrl() when your page loads
  //applyFiltersFromUrl();

  // Function to extract options from the dropdown
  function extractOptionsFromDropdown() {
    const dropdown = document.querySelector('.property-type select');
    if (dropdown) {
      const options = Array.from(dropdown.options).map(option => option.value);
      return options.filter(option => option !== '');
    } else {
      console.error('.property-type select element not found.');
      return [];
    }
  }

  // Example usage:
  const dropdownOptions = extractOptionsFromDropdown();
  //console.log(dropdownOptions);

  var apiHeader = header + '/api/agents/get-advance-data';
  //fetchDataFunction(apiHeader, dropdownOptions);
  if(filtersExistInUrl())
  {
    applyFiltersFromUrl();
  }
  else{
    fetchDataFunction(apiHeader, dropdownOptions);

  }
});

function filtersExistInUrl() {
    var queryString = window.location.search;
    var urlParams = new URLSearchParams(queryString);
    return urlParams.toString() !== ''; // Returns true if there are any parameters in the URL
  }
  
  // Get filters from URL and apply them
  function applyFiltersFromUrl() {
    if (filtersExistInUrl()) {
        var filtersFromUrl = getFiltersFromUrl();
        appendfilters(filtersFromUrl);
        applyFilter(filtersFromUrl);
    }
  }
  
  function appendfilters(filtersFromUrl){
    
    if (filtersFromUrl.applies_filters) {
      let filtersArray = filtersFromUrl.applies_filters.split(',');
      filtersArray.forEach(filter => {
          let checkbox = document.getElementById(filter);
          if (checkbox) {
              checkbox.checked = true;
          }
      });
  }

    if (filtersFromUrl.min_bedrooms) {
        document.getElementById('bedroom').value = filtersFromUrl.min_bedrooms;
    }

    if (filtersFromUrl.min_year_built) {
      document.querySelector('select[name="min_year_built"]').value = filtersFromUrl.min_year_built;

  }

  if (filtersFromUrl.max_year_built) {
    document.querySelector('select[name="max_year_built"]').value = filtersFromUrl.max_year_built;

}

if (filtersFromUrl.min_acrs) {
  document.querySelector('select[name="min_acrs"]').value = filtersFromUrl.min_acrs;

}
if (filtersFromUrl.max_acrs) {
  document.querySelector('select[name="max_acrs"]').value = filtersFromUrl.max_acrs;

}

if (filtersFromUrl.min_sqft) {
  document.querySelector('select[name="min_sqft"]').value = filtersFromUrl.min_sqft;
}
if (filtersFromUrl.max_sqft) {
  document.querySelector('select[name="max_sqft"]').value = filtersFromUrl.max_sqft;
}

if (filtersFromUrl.min_list_price) {
  document.getElementById('min-price').value = filtersFromUrl.min_list_price;

}

if (filtersFromUrl.max_list_price) {
  document.getElementById('max-price').value = filtersFromUrl.max_list_price;

}
    
    if (filtersFromUrl.min_bathrooms) {
        document.getElementById('bathroom').value = filtersFromUrl.min_bathrooms;
    }
    if (filtersFromUrl.community) {
      document.getElementById('community').value = filtersFromUrl.community;
    }
    if (filtersFromUrl.property_type) {
    document.getElementById('propertytype').value = filtersFromUrl.property_type;
    }
    if (filtersFromUrl.search) {
          const searchValue = filtersFromUrl.search.charAt(0).toUpperCase() + filtersFromUrl.search.slice(1);
          document.getElementById('autocomplete').value = searchValue;
      }
    // document.getElementById('ba/throom').value = formattedPrice;
    }


var head = header + '/api/agents/get-advance-data';


var appliedFilters = {};

function applyFilter(filterKeyOrFilters, filterValue) {
  if (typeof filterKeyOrFilters === 'object') {
      for (const [key, value] of Object.entries(filterKeyOrFilters)) {
          if (value !== "") {
              appliedFilters[key] = value;
          } else {
              delete appliedFilters[key];
          }
      }
  } else {
      const filterKey = filterKeyOrFilters;
      if (filterValue !== "") {
          appliedFilters[filterKey] = filterValue;
      } else {
          delete appliedFilters[filterKey];
      }
  }

  const searchParams = new URLSearchParams();
  for (const [key, value] of Object.entries(appliedFilters)) {
      searchParams.append(key, value);
  }
  const searchUrl = `${head}?${searchParams.toString()}`;
  fetchDataFunction(searchUrl);
}

function fetchDataFunction(apiHeader, dropdownOptions) {
  var propertiesContainer = document.getElementById('advance_listings');
  var loader = document.getElementById('loader');
  propertiesContainer.classList.add('blur');
  loader.style.display = 'block';

  var pathSegments = window.location.pathname.split('/').filter(segment => segment !== '');
  var cityName = pathSegments.length > 1 ? pathSegments[1] : null;
  var communityName = pathSegments.length > 2 ? pathSegments[2] : null;

  const payload = {};

  if (cityName !== null) {
    if (cityName !== 'diamond' && cityName !== 'featured') {
      const cityLabel = document.getElementById('autocomplete');
      payload.search = cityName;
      cityLabel.value = cityName.replace(/-/g, ' ').replace(/\b\w/g, char => char.toUpperCase());
    } else {
      payload.search = cityName; // Only set payload.search for "diamond" or "featured"
    }
  }

  // Only proceed to set community and property_type if cityName is not "diamond" or "featured"
  if (cityName !== 'diamond' && cityName !== 'featured') {
     if (communityName !== null) {
      const communityLabel = document.getElementById('community');
      if (communityLabel) {
        payload.community = communityName;

        // Array of community options
        const communityOptions = Array.from(communityLabel.options).map(option => option.value);

        // Check if communityName exists in the array of options
        if (communityOptions.includes(communityName)) {
          // Find the option element with the corresponding value
          const option = communityLabel.querySelector(`option[value="${communityName}"]`);
          if (option) {
            option.selected = true;
          } else {
            console.error(`Option with value "${communityName}" not found in the community dropdown.`);
          }
        } else {
          console.error(`Community "${communityName}" not found in the dropdown options.`);
        }
      } else {
        console.error('Community dropdown element not found.');
      }
    }
  }

  fetch(apiHeader, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(payload)
  })
    .then(response => {
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      return response.json();
    })
    .then(data => {

      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });

      var scroll_area = document.getElementsByClassName('half_map_area_content');
      scroll_area[0].scrollTo({
        top: 0,
        behavior: 'smooth'
      });


      //console.log(apiHeader);
      displayProperties(data);

      console.log(appliedFilters);
      const searchParams = new URLSearchParams();
      for (const [key, value] of Object.entries(appliedFilters)) {
        searchParams.append(key, value);
      }


      loader.style.display = 'none';
      propertiesContainer.classList.remove('blur');

      // hideLoader();



      var paginationCountContainer = document.querySelector('.listing_count');
      paginationCountContainer.textContent = ``;
      var paginationContainer = document.getElementById('pagination');
      paginationContainer.innerHTML = ``;
      var totalListings = 0;
      var labels = 0;
      var paginationCountContainerListing = document.getElementById('results');
      paginationCountContainerListing.textContent = ``;
      // //console.log(data);
      if (data.total_count === 0) {
        paginationCountContainer.textContent = '';
        paginationCountContainerListing.textContent = `${totalListings} Results`;
      }
      else {
        const currentPage = data.listing_data.current_page;
        const perPage = data.listing_data.per_page;
        totalListings = data.total_count;
        labels = data.label;
        const startAgentIndex = (currentPage - 1) * perPage + 1;
        const endAgentIndex = Math.min(currentPage * perPage, totalListings);

        let paginationHtml = '';

        if (currentPage > 1) {
          paginationHtml += `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="fetchDataFunction('${data.listing_data.first_page_url}?${searchParams.toString()}')"><i class="fa fa-angle-double-left"></i></a></li>`;
          paginationHtml += `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="fetchDataFunction('${data.listing_data.prev_page_url}?${searchParams.toString()}')"><i class="fa fa-angle-left"></i></a></li>`;
        } else {
          paginationHtml += `<li class="page-item disabled"><span class="page-link"><i class="fa fa-angle-double-left"></i></span></li>`;
          paginationHtml += `<li class="page-item disabled"><span class="page-link"><i class="fa fa-angle-left"></i></span></li>`;
        }

        const startPage = Math.max(1, currentPage - 2);
        const endPage = Math.min(Math.ceil(totalListings / perPage), currentPage + 2);

        for (let i = startPage; i <= endPage; i++) {
          if (i === currentPage) {
            paginationHtml += `<li class="page-item active"><span class="page-link">${i}</span></li>`;
          } else {
            paginationHtml += `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="fetchDataFunction('${data.listing_data.path}?page=${i}&${searchParams.toString()}')">${i}</a></li>`;
          }
        }

        if (currentPage < Math.ceil(totalListings / perPage)) {
          paginationHtml += `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="fetchDataFunction('${data.listing_data.next_page_url}?${searchParams.toString()}')"><i class="fa fa-angle-right"></i></a></li>`;
          paginationHtml += `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="fetchDataFunction('${data.listing_data.path}?page=${Math.ceil(totalListings / perPage)}&${searchParams.toString()}')"><i class="fa fa-angle-double-right"></i></a></li>`;
        } else {
          paginationHtml += `<li class="page-item disabled"><span class="page-link"><i class="fa fa-angle-right"></i></span></li>`;
          paginationHtml += `<li class="page-item disabled"><span class="page-link"><i class="fa fa-angle-double-right"></i></span></li>`;
        }


        paginationContainer.innerHTML = paginationHtml;
        paginationCountContainer.textContent = `${startAgentIndex} - ${endAgentIndex} of ${totalListings} properties available`;
        paginationCountContainerListing.textContent = `${labels}`;
      }

      replaceClassForView();
      displaymarkers(data);


    })
    .catch(error => {
      //  hideLoader();
      console.error('There was a problem with the fetch operation:', error);
    });

}


function replaceClassForView() {
  const gridViewIcon = document.getElementById("mapView");
  const listingsDiving = document.getElementsByClassName("listings_div");

  if (gridViewIcon.disabled) {
    for (let i = 0; i < listingsDiving.length; i++) {
      if (listingsDiving[i].classList.contains("col-md-6")) {
        listingsDiving[i].classList.replace("col-md-6", "col-md-3");
      }
    }
  } else {
    for (let i = 0; i < listingsDiving.length; i++) {
      if (listingsDiving[i].classList.contains("col-md-3")) {
        listingsDiving[i].classList.replace("col-md-3", "col-md-6");
      }
    }
  }
}


document.addEventListener('DOMContentLoaded', function() {
  var searchButton = document.getElementById('searchButton');
  var autocompleteInput = document.getElementById('autocomplete');
  var suggestionList = document.getElementById('suggestion-list');
  var selectedIndex = -1;
  var localSuggestions = {};

  // Load local JSON file
  fetch('/cities_with_subdivisions.json')
      .then(response => response.json())
      .then(data => {
          console.log(data);
          localSuggestions = data || {}; // Ensure localSuggestions is an object with cities as keys and arrays of subdivisions as values
      })
      .catch(error => {
          console.error('Error loading local JSON:', error);
      });

  // Search button click event
  // searchButton.addEventListener('click', function() {
  //     var inputValue = autocompleteInput.value.trim();
  //     var formattedInput = inputValue.toLowerCase().replace(/\s+/g, '-');
  //     window.location.href = '/search/' + formattedInput;
  // });

  // Autocomplete input event
  autocompleteInput.addEventListener('input', function() {
      var query = this.value;
      if (query.length >= 3) {
          var localResults = searchLocalSuggestions(query);

          if (localResults.length > 0) {
              displayLocalSuggestions(localResults, query);
          } else {
              fetchSuggestionsFromAPI(query);
          }
      } else {
          suggestionList.innerHTML = ''; // Clear suggestion list if query length is less than three
      }
  });

  // Search local suggestions
    function searchLocalSuggestions(query) {
    var results = [];
    Object.keys(localSuggestions).forEach(function(state) {
        if (state.toLowerCase().includes(query.toLowerCase())) {
            Object.keys(localSuggestions[state]).forEach(function(city) {
                results.push({ city: city, subdivision: '', state: state });
                localSuggestions[state][city].forEach(function(subdivision) {
                    results.push({ city: city, subdivision: subdivision, state: state });
                });
            });
        } else {
            Object.keys(localSuggestions[state]).forEach(function(city) {
                if (city.toLowerCase().includes(query.toLowerCase())) {
                    results.push({ city: city, subdivision: '', state: state });
                }
                localSuggestions[state][city].forEach(function(subdivision) {
                    if (subdivision.toLowerCase().includes(query.toLowerCase())) {
                        results.push({ city: city, subdivision: subdivision, state: state });
                    }
                });
            });
        }
    });
    return results;
}

  // Fetch suggestions from API
  function fetchSuggestionsFromAPI(query) {
      fetch(header+'/api/agents/listing-autosuggestion-map', {
              method: 'POST',
              headers: {
                  'Content-Type': 'application/json'
              },
              body: JSON.stringify({
                  key: query
              })
          })
          .then(response => {
              if (!response.ok) {
                  throw new Error('Network response was not ok');
              }
              return response.json();
          })
          .then(data => {
              var suggestedAgents = data.suggested_agents;
              displaySuggestions(suggestedAgents, query);
          })
          .catch(error => {
              console.error('Error:', error);
              suggestionList.innerHTML = '';
          });
  }

  // Display local suggestions
      function displayLocalSuggestions(suggestions, query) {
    suggestionList.innerHTML = '';
    selectedIndex = -1; // Reset the selectedIndex when new suggestions are loaded

    if (suggestions.length > 0) {
        var cityCategoryElement = document.createElement('div');
        cityCategoryElement.textContent = 'Cities';
        cityCategoryElement.className = 'category';
        suggestionList.appendChild(cityCategoryElement);

        var citySuggestions = suggestions.filter(suggestion => !suggestion.subdivision);
        citySuggestions.forEach(function(suggestion) {
            var suggestionElement = document.createElement('div');
            var boldSuggestion = `${suggestion.city}, ${suggestion.state}`;
            boldSuggestion = boldSuggestion.replace(new RegExp(query, 'gi'), '<b>$&</b>');
            suggestionElement.innerHTML = boldSuggestion;
            suggestionElement.className = 'suggestion';
            suggestionElement.addEventListener('click', function() {
                window.location.href = '/search/' + suggestion.city.toLowerCase().replace(/\s+/g, '-');
            });

            suggestionList.appendChild(suggestionElement);
        });

        var neighborhoodCategoryElement = document.createElement('div');
        neighborhoodCategoryElement.textContent = 'Neighborhoods';
        neighborhoodCategoryElement.className = 'category';
        suggestionList.appendChild(neighborhoodCategoryElement);

        var subdivisionSuggestions = suggestions.filter(suggestion => suggestion.subdivision);
        subdivisionSuggestions.forEach(function(suggestion) {
            var suggestionElement = document.createElement('div');
            var boldSuggestion = `${suggestion.subdivision}, ${suggestion.city}, ${suggestion.state}`;
            boldSuggestion = boldSuggestion.replace(new RegExp(query, 'gi'), '<b>$&</b>');
            suggestionElement.innerHTML = boldSuggestion;
            suggestionElement.className = 'suggestion';
            suggestionElement.addEventListener('click', function() {
                var currentUrl = window.location.href;
                var citySlug = suggestion.city.toLowerCase().replace(/\s+/g, '-');
                var neighborhoodSlug = suggestion.subdivision.toLowerCase().replace(/\s+/g, '-');

                if (/\/search\/[^\/]+/.test(currentUrl)) {
                  
                  window.location.href = '/search/' + citySlug + '/' + neighborhoodSlug;
                } else {
                    var selectedElement = document.createElement('div');
                    selectedElement.textContent = `Selected: ${suggestion.subdivision}, ${suggestion.city}, ${suggestion.state}`;
                    selectedElement.className = 'selected-suggestion';
                    suggestionList.appendChild(selectedElement);
                }
            });
            suggestionList.appendChild(suggestionElement);
        });
    }
}


  // Display suggestions from API
  // Display suggestions from API
    function displaySuggestions(suggestedAgents, query) {
    suggestionList.innerHTML = '';
    selectedIndex = -1; // Reset the selectedIndex when new suggestions are loaded

    // Object to categorize suggestions
    var categories = {
        'Address': suggestedAgents.fullAddress,
        'MLS\u00AE Number': suggestedAgents.mls_ids
    };

    Object.keys(categories).forEach(function(category) {
        if (categories[category].length > 0) {
            var categoryElement = document.createElement('div');
            categoryElement.textContent = category;
            categoryElement.className = 'category';
            suggestionList.appendChild(categoryElement);

            categories[category].forEach(function(suggestion, index) {
                var suggestionElement = document.createElement('div');
                var boldSuggestion = suggestion.replace(new RegExp(query, 'gi'), '<b>$&</b>');
                suggestionElement.innerHTML = boldSuggestion;
                suggestionElement.className = 'suggestion';

                if (category === 'MLS��� Number') {
                    suggestionElement.addEventListener('click', function() {
                        var mlsId = suggestion.split(' - ')[0]; // Take the part before "-"
                        window.location.href = '/property-detail/' + mlsId;
                    });
                } else {
                    suggestionElement.addEventListener('click', function() {
                        var slugUrl = suggestedAgents.slug_urls[index];
                        var listingId = suggestedAgents.listingIds[index];
                        if (slugUrl) {
                            window.location.href = '/property-detail/' + slugUrl;
                        } else if (listingId) {
                            window.location.href = '/property-detail/' + listingId;
                        }
                    });
                }

                suggestionList.appendChild(suggestionElement);
            });
        }
    });
}



  // Handle suggestion list clicks
  suggestionList.addEventListener('click', function(event) {
      if (event.target.classList.contains('suggestion')) {
          var suggestionText = event.target.textContent.split(',')[0].trim(); // Get the city name only
          autocompleteInput.value = suggestionText;
          suggestionList.innerHTML = '';
          applyFilter('search', suggestionText); // Apply filter with city only
          autocompleteInput.dispatchEvent(new Event('change'));
      }
  });

  // Handle keyboard navigation
    autocompleteInput.addEventListener('keydown', function(event) {
      var suggestions = suggestionList.getElementsByClassName('suggestion');
      if (suggestions.length > 0) {
          if (event.key === 'ArrowDown') {
              event.preventDefault();
              if (selectedIndex < suggestions.length - 1) {
                  selectedIndex++;
              } else {
                  selectedIndex = 0; // Loop back to the first suggestion
              }
              highlightSuggestion(suggestions, selectedIndex);
          } else if (event.key === 'ArrowUp') {
              event.preventDefault();
              if (selectedIndex > 0) {
                  selectedIndex--;
              } else {
                  selectedIndex = suggestions.length - 1; // Loop back to the last suggestion
              }
              highlightSuggestion(suggestions, selectedIndex);
          } else if (event.key === 'Enter') {
            event.preventDefault();
            if (selectedIndex >= 0 && selectedIndex < suggestions.length) {
                var suggestionElement = suggestions[selectedIndex];
                var suggestionText = suggestionElement.textContent.split(',')[0].trim(); // Get the city name only
                autocompleteInput.value = suggestionText;
                suggestionList.innerHTML = '';
                applyFilter('search', suggestionText); // Apply filter with city only
                autocompleteInput.dispatchEvent(new Event('change'));

                // Simulate click event on the selected suggestion
                suggestionElement.click();
            }
          }
      }
  });

  function highlightSuggestion(suggestions, index) {
      for (var i = 0; i < suggestions.length; i++) {
          if (i === index) {
              suggestions[i].classList.add('highlighted');
              ensureSuggestionInView(suggestions[i]);
          } else {
              suggestions[i].classList.remove('highlighted');
          }
      }
  }

  function ensureSuggestionInView(suggestion) {
      var suggestionListRect = suggestionList.getBoundingClientRect();
      var suggestionRect = suggestion.getBoundingClientRect();

      if (suggestionRect.bottom > suggestionListRect.bottom) {
          suggestionList.scrollTop += suggestionRect.bottom - suggestionListRect.bottom;
      } else if (suggestionRect.top < suggestionListRect.top) {
          suggestionList.scrollTop -= suggestionListRect.top - suggestionRect.top;
      }
  }

  window.addEventListener('click', function(event) {
      if (!event.target.closest('#suggestion-list') && !event.target.closest('#autocomplete')) {
          suggestionList.innerHTML = '';
      }
  });
});








function displayProperties(property) {
  var ListingsDiv = document.getElementById('advance_listings');
  ListingsDiv.innerHTML = '';
  if (property.total_count === 0) {
    ListingsDiv.innerHTML = '<p>OOPS! NO PROPERTIES FOUND</p>';
    return;
  }
  var properties = property.listing_data.data;
  // //console.log(properties);
  const formatter = new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'USD',
    minimumFractionDigits: 0,
  });


  properties.forEach(property => {

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
    listingDiv.classList.add('col-md-6', 'col-sm-6', 'listings_div');
    const imageUrl = property.image_url ? `${property.image_url}` : `{{ asset('images/no_image.jpg') }}`;

    listingDiv.innerHTML = `<div class="listing-style5">
        <div class="list-thumb">
       <a href="/property-detail/${property.slug_url || property.ListingId}" data-bs-toggle="tooltip" data-bs-placement="top" title="Preview" target="_blank">
<img src="${imageUrl}" alt="${property.ListingId}" onerror="this.src='/images/no_image.jpg';"></a>
            ${property.diamond == 1 ?
        `<div class="list-tag fz12">
                  <i class="fa-thin fa-gem me-2"></i>Diamond
              </div>` :
        property.featured == 1 ?
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
            <span class="flaticon-like" id="fav-icon-${property.ListingId}"></span>
         </a>
            </div>
        </div>
        <a href="/property-detail/${property.slug_url || property.ListingId}" data-bs-toggle="tooltip" data-bs-placement="top" title="Preview" target="_blank">
        <div class="list-content">
           <div class="list-price mb-2">
                ${
                    property.PropertyType === 'Commercial' && property.LeaseAmount && property.LeaseAmountFrequency
                    ? `${formatter.format(property.LeaseAmount)} / ${property.LeaseAmountFrequency}${property.LeaseMeasure ? ' / ' + property.LeaseMeasure : ''}`
                    : `${formatter.format(property.ListPrice)}`
                }
            </div>
             <h6 class="list-title">
            ${property.UnparsedAddress ? property.UnparsedAddress + ', ': UnparsedAddress}${property.City ? property.City + ', ' : ''}${property.StateOrProvince}</h6>

            <p class="list-text">${property.PropertyType}</p>
            <div class="list-meta d-flex align-items-center gap-3">
                        ${property.BedroomsTotal ? `<p><span class="flaticon-bed"></span>${property.BedroomsTotal} bed</p>` : ''}
                        ${property.BathroomsFull > 0 || property.BathroomsHalf > 0 
                          ? `<p><span class="flaticon-shower"></span>
                              ${property.BathroomsFull || 0}${property.BathroomsHalf > 0 ? `.${property.BathroomsHalf}` : ''} bathroom${property.BathroomsFull + property.BathroomsHalf > 1 ? 's' : ''}
                             </p>` 
                          : ''}
                        ${property.BuildingAreaTotalSF ? `<p><span class="flaticon-expand"></span>${Math.floor(property.BuildingAreaTotalSF)} sqft</p>` : (property.LivingAreaSF ? `<p><span class="flaticon-expand"></span>${Math.floor(property.LivingAreaSF)} sqft</p>` : '')}
                    </div>
            <span class="mlsNumber">MLS&#174; Number: ${property.ListingId}</span>
        </div>
        </a>
    </div>`;


    ListingsDiv.appendChild(listingDiv);
    // hideLoader();
    
  });
  if (loggedIn()) {
      getmarkedlistings();
  }
}



function toggleFavorite(listingId) {
  if (!loggedIn()) {
    $('#exampleModalToggle').modal('show');
  }
  else {

    var favIcon = document.getElementById(`fav-icon-${listingId}`);
    if (favIcon) {
      favIcon.classList.toggle('filled');
      favIcon.classList.toggle('white-background');
      var isFavorite = favIcon.classList.contains('filled');
      addToFavorites(listingId, isFavorite ? 1 : 0);
    } else {
      console.error('Favorite icon not found');
    }
  }
}



function getmarkedlistings() {

  if (loggedIn()) {
    var userId = getSessionUserId();
    // console.log(userId);
    $.ajax({
      url: "/get-listings",
      type: 'get',
      data: {
        user_id: userId
      },
      success: function (response) {
        console.log('listingid : ', response);
        var favoriteProperties = response.favorite_properties;
        favoriteProperties.forEach(function (propertyId) {
          var favIcon = document.getElementById(`fav-icon-${propertyId}`);

          if (favIcon) {
            favIcon.classList.add('filled');
            favIcon.classList.add('white-background');
          }
        });
      },
      error: function (xhr, status, error) {
        console.error('Error getting marked listings');
      }
    });
  }
}
function addToFavorites(propertyId, favoriteStatus) {
  if (loggedIn()) {
    var userId = getSessionUserId();
    $.ajax({
      url: "/add-to-favorites",
      type: 'POST',
      data: {
        property_id: propertyId,
        favorite: favoriteStatus,
        user_id: userId
      },
      success: function (response) {
        //console.log('Toggle successful');
        if (favoriteStatus === 1) {
          showToaster('Property added to favorites');
        } else {
          showToaster('Property removed from favorites');
        }

        if (favoriteStatus) {
          favIcon.classList.add('filled');
        } else {
          favIcon.classList.remove('filled');
        }
      },
      error: function (xhr, status, error) {
        console.error('Toggle failed');
      }
    });
  } else {

    $('#exampleModalToggle').modal('show');
  }
}

function loggedIn() {
  return sessionData.username ? true : false;
}

function getSessionUserId() {
  return sessionData.userId;
}

function showToaster(text) {
  $.toast({

    text: text,
    showHideTransition: 'slide',
    icon: 'success',
    loaderBg: '#f2a654',
    position: 'top-right'
  });
}


function showToast(text) {
  $.toast({

    text: text,
    showHideTransition: 'slide',
    icon: 'error',
    loaderBg: '#f2a654',
    position: 'top-right'
  });
}



function displaymarkers(data) {
  let markers = []; // Declare markers array here

  // Clear all markers from the map
  markers.forEach(marker => marker.setMap(null));
  markers = []; // Clear markers array

  if (!data.map_data || data.map_data.length === 0) {
    return; // Exit the function if there is no data
  }

  var properties = data.map_data;
  const initialCoords = {
    lat: parseFloat(properties[0].Latitude),
    lng: parseFloat(properties[0].Longitude)
  };

  const map = new google.maps.Map(document.getElementById('property-map'), {
    zoom: 5, // Set initial zoom level to a lower value
    center: initialCoords,
    scrollwheel: true
  });

  const bounds = new google.maps.LatLngBounds();
  let currentInfoWindow = null; // Keep track of the currently opened info window

  properties.forEach(function (item) {
    if (!item.Latitude || !item.Longitude) {
      return; 
    }
    const markerIcon = {
      url: marker_icon, // Blue marker icon
      scaledSize: new google.maps.Size(40, 40) // Adjust marker size if needed
    };

    const marker = new google.maps.Marker({
      position: { lat: parseFloat(item.Latitude), lng: parseFloat(item.Longitude) },
      title: item.ListingKeyNumeric,
      icon: markerIcon
    });
    bounds.extend(marker.getPosition());
    markers.push(marker);

    const formatter = new Intl.NumberFormat('en-US', {
      style: 'currency',
      currency: 'USD',
      minimumFractionDigits: 0,
    });

    var UnparsedAddress = '';

    if (item.StreetNumber) {
      UnparsedAddress += item.StreetNumber;
    }

    if (item.StreetDirPrefix) {
      if (UnparsedAddress) {
        UnparsedAddress += ' ';
      }
      UnparsedAddress += item.StreetDirPrefix;
    }

    if (item.StreetName) {
      if (UnparsedAddress) {
        UnparsedAddress += ' ';
      }
      UnparsedAddress += item.StreetName;
    }

    if (item.StreetSuffix) {
      if (UnparsedAddress) {
        UnparsedAddress += ' ';
      }
      UnparsedAddress += item.StreetSuffix;
    }

    if (item.UnitNumber) {
      if (UnparsedAddress) {
        UnparsedAddress += ' ';
      }
      UnparsedAddress += item.UnitNumber;
    }

    // Constructing the full address
    const fullAddress = UnparsedAddress + (UnparsedAddress ? ', ' : '') + item.City + ', ' + item.StateOrProvince;

    const infowindow = new google.maps.InfoWindow({
      content: '<div class="row">' +
        '<div class="col-md-6">' +
        '<img src="' + item.image_url + '" style="width: 150px; height: 150px" />' + // Corrected line
        '</div>' +
        '<div class="col-md-6">' +
        '<div class="row">' +
        '<div class="col-md-12"><h3>' + formatter.format(item.ListPrice) + '</h3></div>' +
        '<div class="col-md-12"><h5><a target="_blank" href="/property-detail/' + (item.slug_url ? item.slug_url : item.ListingId) + '">' + fullAddress + '</a></h5></div>' +
        '<div class="col-md-12"><small>MLS&#174; Number:' + item.ListingId + '</small></div>' +
        '</div>' +
        '</div>' +
        '</div>'
    });

    marker.addListener('click', function () {
      // Close the currently opened info window before opening a new one
      if (currentInfoWindow) {
        currentInfoWindow.close();
      }
      infowindow.open(map, marker);
      currentInfoWindow = infowindow; // Set the current info window to the newly opened one
    });
  });

  map.fitBounds(bounds);

  // Adjust zoom level based on the number of markers
  if (markers.length < 30) {
    map.setZoom(10); // Increase zoom level if less than 30 markers
  }

  // Define custom cluster icon function
  function customClusterIcon(cluster) {
    const markersCount = cluster.getMarkers().length;
    const text = markersCount >= 1000 ? '999+' : markersCount.toString(); // Limit to 999+
    return {
      url: customClusterStyles[0].url.replace('{text}', text),
      height: customClusterStyles[0].height,
      width: customClusterStyles[0].width,
      anchorText: customClusterStyles[0].anchorText,
    };
  }

  // Define custom cluster styles
  const customClusterStyles = [{
    textColor: 'white',  // Text color for marker count
    url: 'data:image/svg+xml;charset=UTF-8,' +
      encodeURIComponent(
        '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" xmlns:xlink="http://www.w3.org/1999/xlink">' +
        '<circle cx="20" cy="20" r="17" fill="#10579f" stroke="white" stroke-width="2" />' + // Blue circle background with white border
        '<text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="white" font-size="8">' +
        '</text>' +
        '</svg>'
      ),
    height: 40,
    width: 40,
    anchorText: [8, 0], // Adjust text position within cluster
    textSize: 11,
  }];

  if (markers.length >= 10) {
    const markerCluster = new MarkerClusterer(map, markers, {
      gridSize: 60,
      minimumClusterSize: 10,
      styles: customClusterStyles,
      clusterIcon: customClusterIcon, // Use custom cluster icon function
    });
  } else {
    markers.forEach(function (marker) {
      marker.setMap(map);
    });
  }
}


function clearFilters() {
  const basePath = '/search';
  const diamondbasePath = '/search/diamond';

  
  if (window.location.pathname !== basePath) {
    appliedFilters = {}; 

    document.querySelectorAll('input[type="checkbox"]').forEach(function (checkbox) {
      checkbox.checked = false;
    });
  
    document.querySelectorAll('select').forEach(function (select) {
      select.selectedIndex = 0;
    });
  
    const minPriceSelect = document.getElementById('min-price');
    Array.from(minPriceSelect.options).forEach(option => {
      option.style.display = 'block';
    });
  
    document.getElementById('autocomplete').value = '';
  
    fetchDataFunction(head); 
  }

  appliedFilters = {}; 

  document.querySelectorAll('input[type="checkbox"]').forEach(function (checkbox) {
    checkbox.checked = false;
  });

  document.querySelectorAll('select').forEach(function (select) {
    select.selectedIndex = 0;
  });

  const minPriceSelect = document.getElementById('min-price');
  Array.from(minPriceSelect.options).forEach(option => {
    option.style.display = 'block';
  });

  document.getElementById('autocomplete').value = '';

  fetchDataFunction(head); 
}

document.addEventListener('DOMContentLoaded', function () {
  document.getElementById("clearFilters").addEventListener("click", clearFilters);
});



document.addEventListener("DOMContentLoaded", function () {

  const half_map_area = document.getElementsByClassName("half_map_area");

  const gridViewIcon = document.getElementById("gridView");
  const mapViewIcon = document.getElementById("mapView");
  const gridSection = document.getElementById("gridSection");
  const accordionExample = document.getElementById("accordionExample");
  const searchBar = document.getElementById("searchBar");
  const clearAll = document.getElementById("clearAll");
  const bathRoom = document.getElementById("bathRoom");
  const bedRoom = document.getElementById("bedRoom");
  const extra = document.getElementById("extra");

  const listingsDiving = document.getElementsByClassName("listings_div");


  gridViewIcon.style.backgroundColor = "#10579f";
  gridViewIcon.style.color = "#ffffff";
  gridViewIcon.disabled = true;

  gridViewIcon.addEventListener("click", function () {
    half_map_area[0].style.display = "block";

    //console.log(listingsDiving, 'ruchit');

    mapViewIcon.style.backgroundColor = "";
    mapViewIcon.style.color = "";
    mapViewIcon.disabled = false;

    gridViewIcon.style.backgroundColor = "#10579f";
    gridViewIcon.style.color = "#ffffff";
    gridViewIcon.disabled = true;

    gridSection.classList.remove("col-lg-12");
    gridSection.classList.add("col-lg-5");

    if (window.innerWidth > 800){
      accordionExample.classList.remove("col-md-3");
      accordionExample.classList.add("col-md-6");
    }

    if (window.innerWidth < 800) {
      searchBar.classList.remove("col-3");
      searchBar.classList.add("col-12","col-sm-3");

      clearAll.classList.remove("col-md-1");
      clearAll.classList.add("col-md-2");

      bathRoom.classList.remove("mt-2");
      bedRoom.classList.remove("mt-2");
      extra.classList.add("col-md-3");
    }
    for (let i = 0; i < listingsDiving.length; i++) {
      if (listingsDiving[i].classList.contains("col-md-3")) {
        listingsDiving[i].classList.replace("col-md-3", "col-md-6");
      }
    }
  });

  mapViewIcon.addEventListener("click", function () {

    half_map_area[0].style.display = "none";
    //console.log(listingsDiving,'r');

    gridViewIcon.style.backgroundColor = "";
    gridViewIcon.style.color = "";
    gridViewIcon.disabled = false;

    mapViewIcon.style.backgroundColor = "#10579f";
    mapViewIcon.style.color = "#ffffff";
    mapViewIcon.disabled = true;

    gridSection.classList.remove("col-lg-5");
    gridSection.classList.add("col-lg-12");


    if (window.innerWidth > 800) {
      accordionExample.classList.remove("col-md-6");
      accordionExample.classList.add("col-md-3");
      searchBar.classList.remove("col-12");
      searchBar.classList.add("col-12","col-sm-6");
      clearAll.classList.remove("col-md-2");
      clearAll.classList.add("col-md-1");
      bathRoom.classList.add("mt-2");
      bedRoom.classList.add("mt-2");
    }


    for (let i = 0; i < listingsDiving.length; i++) {
      if (listingsDiving[i].classList.contains("col-md-6")) {
        listingsDiving[i].classList.replace("col-md-6", "col-md-3");
      }
    }
  });
});



function updateMinPriceOptions() {
  const maxPriceSelect = document.getElementById('max-price');
  const minPriceSelect = document.getElementById('min-price');
  const maxPrice = parseInt(maxPriceSelect.value);

  // Show all options in the min price dropdown
  Array.from(minPriceSelect.options).forEach(option => {
    option.style.display = 'block'; // Show option
  });

  // Hide options in min price dropdown greater than selected max price
  Array.from(minPriceSelect.options).forEach(option => {
    if (parseInt(option.value) > maxPrice) {
      option.style.display = 'none'; // Hide option
    }
  });
}

function updateMaxPriceOptions() {
  const maxPriceSelect = document.getElementById('max-price');
  const minPriceSelect = document.getElementById('min-price');
  const minPrice = parseInt(minPriceSelect.value);

  // Show all options in the max price dropdown
  Array.from(maxPriceSelect.options).forEach(option => {
    option.style.display = 'block'; // Show option
  });

  // Hide options in max price dropdown less than selected min price
  Array.from(maxPriceSelect.options).forEach(option => {
    if (parseInt(option.value) < minPrice) {
      option.style.display = 'none'; // Hide option
    }
  });
}

function getFiltersFromUrl() {
  var queryString = window.location.search;
  var urlParams = new URLSearchParams(queryString);

  var filters = {};

  for (const [key, value] of urlParams) {
    switch (key) {
      case 'applies_filters':
      case 'community':
      case 'property_type':
      case 'min_list_price':
      case 'max_list_price':
      case 'min_sqft':
      case 'max_sqft':
      case 'min_bedrooms':
      case 'min_bathrooms':
      case 'min_acrs':
      case 'max_acrs':
      case 'min_year_built':
      case 'max_year_built':
        if (key === 'min_list_price' || key === 'max_list_price') {
          filters[key] = parseInt(value); // Remove decimal points by converting to integer
        } else {
          filters[key] = value;
        }
        break;
      case 'furnishedCheckbox':
      case 'petsCheckbox':
      case 'fireplace':
      case 'onegarage':
      case 'twogarage':
      case 'threegarage':
      case 'onestory':
      case 'twostories':
      case 'threestories':
      case 'deck':
      case 'basement':
      case 'airconditioning':
      case 'pool':
      case 'parking':
      case 'laundry':
      case 'clubhouse':
      case 'playground':
      case 'address':
        filters.address = '1';
        break;
      case 'lake':
        filters[key] = value === 'true'; // Convert string 'true'/'false' to boolean
        break;
      case 'search': 
        filters.search = value;
        break;
      default:
        break;
    }
  }

  return filters;
}


// document.addEventListener("DOMContentLoaded", function() {
//   var applyFiltersButton = document.getElementById("applyFiltersButton");

//   applyFiltersButton.addEventListener("click", function() {
//       applyFilterForCheckbox("furnishedCheckbox", 'furnished_filter');
//       applyFilterForCheckbox("petsCheckbox", 'pets_allowed');
//   });

//   function applyFilterForCheckbox(checkboxId, filterType) {
//       var checkbox = document.getElementById(checkboxId);
//       var filterValue = checkbox.checked ? "true" : "";
//       applyFilter(filterType, filterValue);
//   }
// });

// document.addEventListener("DOMContentLoaded", function() {

//   var furnishedCheckbox = document.getElementById("furnishedCheckbox");
//   var petsCheckbox = document.getElementById("petsCheckbox");
//   var fireplace = document.getElementById("fireplace");
//   var onegarage = document.getElementById("onegarage");
//   var twogarage = document.getElementById("twogarage");
//   var threegarage = document.getElementById("threegarage");
//   var onestory = document.getElementById("onestory");
//   var twostories = document.getElementById("twostories");
//   var threestories = document.getElementById("threestories");
//   var deck = document.getElementById("deck");
//   var basement = document.getElementById("basement");
//   var airconditioning = document.getElementById("airconditioning");

//   furnishedCheckbox.addEventListener("change", function() {
//       applyFilter('furnished_filter', this.checked ? 'true' : '');
//   });

//   petsCheckbox.addEventListener("change", function() {
//       applyFilter('pets_allowed', this.checked ? 'true' : '');
//   });

//   fireplace.addEventListener("change", function() {
//     applyFilter('fireplace', this.checked ? 'true' : '');
//   });

//   onegarage.addEventListener("change", function() {
//     applyFilter('onegarage', this.checked ? 'true' : '');
//   });

//   twogarage.addEventListener("change", function() {
//     applyFilter('twogarage', this.checked ? 'true' : '');
//   });

//   threegarage.addEventListener("change", function() {
//     applyFilter('threegarage', this.checked ? 'true' : '');
//   });

//   onestory.addEventListener("change", function() {
//     applyFilter('onestory', this.checked ? 'true' : '');
//   });

//   twostories.addEventListener("change", function() {
//     applyFilter('twostories', this.checked ? 'true' : '');
//   });

//   threestories.addEventListener("change", function() {
//     applyFilter('threestories', this.checked ? 'true' : '');
//   });

//   deck.addEventListener("change", function() {
//     applyFilter('deck', this.checked ? 'true' : '');
//   });

//   basement.addEventListener("change", function() {
//     applyFilter('basement', this.checked ? 'true' : '');
//   });

//   airconditioning.addEventListener("change", function() {
//     applyFilter('air_conditioning', this.checked ? 'true' : '');
//   });

// });



document.addEventListener("DOMContentLoaded", function () {
  var applyFiltersButtons = document.getElementsByClassName("applyFiltersButton");
  var resetFiltersButton = document.getElementById("resetFiltersButton");

  if (applyFiltersButtons.length > 0) {
    for (var i = 0; i < applyFiltersButtons.length; i++) {
      applyFiltersButtons[i].addEventListener("click", function () {
        applyFilters();
      });
    }
  }

  if (resetFiltersButton) {
    resetFiltersButton.addEventListener("click", function () {
      clearFilters();
    });
  }


  

  function applyFilters() {
    // Collecting filter values as before
    var autocompleteValue = document.getElementById('autocomplete').value;
    var minSqftValue = document.querySelector('select[name="min_sqft"]').value;
    var maxSqftValue = document.querySelector('select[name="max_sqft"]').value;
    var minAcresValue = document.querySelector('select[name="min_acrs"]').value;
    var maxAcresValue = document.querySelector('select[name="max_acrs"]').value;
    var minYearBuiltValue = document.querySelector('select[name="min_year_built"]').value;
    var maxYearBuiltValue = document.querySelector('select[name="max_year_built"]').value;

    // Function to safely get checkbox value
    function getCheckboxValue(id) {
        var element = document.getElementById(id);
        return element ? element.checked : false;
    }

    // Collecting checkbox values as before
    var furnishedCheckbox = getCheckboxValue("furnishedCheckbox");
    var petsCheckbox = getCheckboxValue("petsCheckbox");
    var fireplace = getCheckboxValue("fireplace");
    var onegarage = getCheckboxValue("onegarage");
    var twogarage = getCheckboxValue("twogarage");
    var threegarage = getCheckboxValue("threegarage");
    var onestory = getCheckboxValue("onestory");
    var twostories = getCheckboxValue("twostories");
    var threestories = getCheckboxValue("threestories");
    var deck = getCheckboxValue("deck");
    var basement = getCheckboxValue("basement");
    var airconditioning = getCheckboxValue("airconditioning");
    var pool = getCheckboxValue("pool");
    var parking = getCheckboxValue("parking");
    var laundry = getCheckboxValue("laundry");
    var clubhouse = getCheckboxValue("clubhouse");
    var playground = getCheckboxValue("playground");
    var lake = getCheckboxValue("lake");
    var balcony = getCheckboxValue("balcony");
    var screened = getCheckboxValue("screened");
    var frontPorch = getCheckboxValue("frontporch");
    var patio = getCheckboxValue("patio");
    var streetLights = getCheckboxValue("streetlights");
    var gazebo = getCheckboxValue("gazebo");

    var checkedCheckboxes = [];
    if (furnishedCheckbox) checkedCheckboxes.push('furnished_filter');
    if (petsCheckbox) checkedCheckboxes.push('pets_allowed');
    if (fireplace) checkedCheckboxes.push('fireplace');
    if (onegarage) checkedCheckboxes.push('onegarage');
    if (twogarage) checkedCheckboxes.push('twogarage');
    if (threegarage) checkedCheckboxes.push('threegarage');
    if (onestory) checkedCheckboxes.push('onestory');
    if (twostories) checkedCheckboxes.push('twostories');
    if (threestories) checkedCheckboxes.push('threestories');
    if (deck) checkedCheckboxes.push('deck');
    if (basement) checkedCheckboxes.push('basement');
    if (airconditioning) checkedCheckboxes.push('air_conditioning');

    if (pool) checkedCheckboxes.push('pool');
    if (parking) checkedCheckboxes.push('parking');
    if (laundry) checkedCheckboxes.push('laundry');
    if (clubhouse) checkedCheckboxes.push('clubhouse');
    if (playground) checkedCheckboxes.push('playground');
    if (lake) checkedCheckboxes.push('lake');

    if (balcony) checkedCheckboxes.push('balcony');
    if (screened) checkedCheckboxes.push('screened');
    if (frontPorch) checkedCheckboxes.push('front_porch');
    if (patio) checkedCheckboxes.push('patio');
    if (streetLights) checkedCheckboxes.push('street_lights');
    if (gazebo) checkedCheckboxes.push('gazebo');

    var appliesFiltersValue = checkedCheckboxes.join(',');

    // Check if current URL contains 'search/Calgary'
    var currentUrl = window.location.href;
    var isCityInUrl = currentUrl.toLowerCase().includes('search/' + autocompleteValue.toLowerCase());

    // Fetching cities_with_subdivisions.json
    fetch('/cities_with_subdivisions.json')
        .then(response => response.json())
        .then(data => {
            var newHref = null;

            // Loop through data to find matching city or neighbourhood
            for (var state in data) {
                for (var city in data[state]) {
                    if (city.toLowerCase() === autocompleteValue.toLowerCase()) {
                        newHref = '/search/' + encodeURIComponent(city);
                    }

                    for (var neighbourhood of data[state][city]) {
                        if (neighbourhood.toLowerCase() === autocompleteValue.toLowerCase()) {
                            newHref = '/search/' + encodeURIComponent(city) + '/' + encodeURIComponent(neighbourhood);
                        }
                    }
                }
            }

            // Decide search behavior based on URL and match
            if (isCityInUrl) {
                var filters = {
                    min_sqft: minSqftValue,
                    max_sqft: maxSqftValue,
                    min_acrs: minAcresValue,
                    max_acrs: maxAcresValue,
                    min_year_built: minYearBuiltValue,
                    max_year_built: maxYearBuiltValue,
                    applies_filters: appliesFiltersValue,
                    just_listed: getCheckboxValue("just_listed"),
                    community: document.getElementById('community').value,
                    property_type: document.getElementById('propertytype').value,
                    min_list_price: document.getElementById('min-price').value,
                    max_list_price: document.getElementById('max-price').value,
                    min_bedrooms: document.getElementById('bedroom').value,
                    min_bathrooms: document.getElementById('bathroom').value,
                    search: autocompleteValue,
                    address: 1
                };

                // Call the function once with the collected filters
                applyFilter(filters);
            } else {
                // If newHref is set (indicating a match found and isCityInUrl is false), redirect to newHref
                if (newHref) {
                    window.location.href = newHref;
                } else {
                    // If no match found, proceed with default search
                    var filters = {
                        min_sqft: minSqftValue,
                        max_sqft: maxSqftValue,
                        min_acrs: minAcresValue,
                        max_acrs: maxAcresValue,
                        min_year_built: minYearBuiltValue,
                        max_year_built: maxYearBuiltValue,
                        applies_filters: appliesFiltersValue,
                        just_listed: getCheckboxValue("just_listed"),
                        community: document.getElementById('community').value,
                        property_type: document.getElementById('propertytype').value,
                        min_list_price: document.getElementById('min-price').value,
                        max_list_price: document.getElementById('max-price').value,
                        min_bedrooms: document.getElementById('bedroom').value,
                        min_bathrooms: document.getElementById('bathroom').value,
                        search: autocompleteValue,
                        address: 1
                    };

                    // Call the function once with the collected filters
                    applyFilter(filters);
                }
            }
        })
        .catch(error => {
            console.error('Error fetching cities_with_subdivisions.json:', error);
            // Handle error fetching JSON file
        });
}





    
});
