const seasonsContainer = document.querySelector('.seasons-container');
const addSeasonButton = document.querySelector('[data-button="add-season"]');

let seasonNumber = document.querySelectorAll('.season-number').length + 1;

addSeasonButton.addEventListener('click', () => {
    const seasonDiv = document.createElement('div');
    seasonDiv.innerHTML = `
        <div class="d-flex flex-row flex-wrap w-100 mb-3">
            <div class="d-flex flex-row g-3 align-items-center w-100">
                <label for="season-${seasonNumber}" class="col-6">Número da Temporada:</label>
                <div class="col-6">
                    <input type="number"
                        id="season-${seasonNumber}"
                        name="seasons[${seasonNumber - 1}][number]"
                        class="form-control" required>
                </div>
                <label for="season-${seasonNumber}" class="col-6">Quantidade de Episódios:</label>
                <div class="col-6">
                    <input type="number"
                        id="season-${seasonNumber}"
                        name="seasons[${seasonNumber - 1}][episodes_count]"
                        class="form-control" required>
                </div>
            </div>
        </div>
    `;
    seasonDiv.classList.add('season-number', 'my-1');
    seasonsContainer.appendChild(seasonDiv);

    seasonNumber++;
});
