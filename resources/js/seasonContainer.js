const seasonsContainer = document.querySelector('.seasons-container');
const addSeasonButton = document.querySelector('[data-button="add-season"]');

let seasonNumber = document.querySelectorAll('.season-number').length + 1;

addSeasonButton.addEventListener('click', () => {
    const seasonDiv = document.createElement('div');
    seasonDiv.innerHTML = `
        <div class="d-flex align-items-center w-100">
            <div class="d-flex flex-row align-items-center justift-content-start">
                <label class="me-1 mb-0">Temporada:</label>
                <input type="number"
                    id="season-${seasonNumber}"
                    name="seasons[${seasonNumber - 1}][number]"
                    value="${seasonNumber}" disabled>
            </div>
            <div class="d-flex flex-row align-items-center justift-content-start">
                <label for="season-${seasonNumber}">Episódios:</label>
                <input type="number"
                    id="season-${seasonNumber}"
                    name="seasons[${seasonNumber - 1}][episodes_count]"
                    class="season-episodes-input form-control ms-2"
                    maxlength="3" required>
            </div>
        </div>
    `;
    seasonDiv.classList.add('season-number', 'my-3', 'col-6', 'px-2');
    seasonsContainer.appendChild(seasonDiv);

    const newSeasonInput = seasonDiv.querySelector('.season-episodes-input');
    if (newSeasonInput) {
        newSeasonInput.focus();
    }

    seasonNumber++;
});
