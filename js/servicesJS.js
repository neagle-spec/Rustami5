var vehicleInfo = {
    Automotive: {
        2023: {
            Audi: ["A3", "A4", "A5"],
            Buick: ["Enclave", "Encore", "Envision"],
            Chevrolet: ["Blazer", "Camaro", "Malibu"],
            Dodge: ["Charger", "Durango", "Hornet"],
            Honda: ["Accord", "Civic", "Pilot"]
        },
        2022: {
            Audi: ["A3", "A4", "A5"],
            Buick: ["Enclave", "Encore", "Envision"],
            Chevrolet: ["Blazer", "Camaro", "Malibu"],
            Dodge: ["Charger", "Durango", "Hornet"],
            Honda: ["Accord", "Civic", "Pilot"]
        },
        2021: {
            Audi: ["A3", "A4", "A5"],
            Buick: ["Enclave", "Encore", "Envision"],
            Chevrolet: ["Blazer", "Camaro", "Malibu"],
            Dodge: ["Charger", "Durango", "Hornet"],
            Honda: ["Accord", "Civic", "Pilot"]
        },
        2020: {
            Audi: ["A3", "A4", "A5"],
            Buick: ["Enclave", "Encore", "Envision"],
            Chevrolet: ["Blazer", "Camaro", "Malibu"],
            Dodge: ["Charger", "Durango", "Hornet"],
            Honda: ["Accord", "Civic", "Pilot"]
        }
    }
}

const mechanicInfo = [
    {
        name: 'Ali Behnam',
        type: 'Automotive',
        year: '2023',
        make: ['Audi', 'Buick', 'Chevrolet'],
        model: 'A3',
    },
    {
        name: 'Badi Hassan',
        type: 'Automotive',
        year: '2022',
        make: ['Dodge', 'Honda'],
        model: 'A3',
    },
    {
        name: 'Cirus Behnam',
        type: 'Automotive',
        year: '2021',
        make: ['Audi', 'Buick', 'Chevrolet'],
        model: 'A3',
    },
    {
        name: 'Darioush Hassan',
        type: 'Automotive',
        year: '2020',
        make: ['Dodge', 'Honda'],
        model: 'A3',
    }
];

window.onload = function(){

    const selectType = document.getElementById('type'),
        selectYear = document.getElementById('year'),
        selectMake = document.getElementById('make'),
        selectModel = document.getElementById('model'),
        selects = document.querySelectorAll('select')

    // force user to select type first
    selectYear.disabled = true
    selectMake.disabled = true
    selectModel.disabled = true

    // enable selection
    selects.forEach(select => {
        if(select.disabled === true){
            select.style.cursor = "auto"
        }
        else{
            select.style.cursor = "pointer"
        }
    })

    for(let type in vehicleInfo){
        selectType.options[selectType.options.length] = new Option(type, type)
    }

    // once type is selected
    selectType.onchange = (e) =>{

        // allow year selection
        selectYear.disabled = false
        selectMake.disabled = true
        selectModel.disabled = true

        // enable selection
        selects.forEach(select => {
            if(select.disabled === true){
                select.style.cursor = "auto"
            }
            else{
                select.style.cursor = "pointer"
            }
        })

        selectYear.length = 1
        selectMake.length = 1
        selectModel.length = 1

        for(let year in vehicleInfo[e.target.value]){
            selectYear.options[selectYear.options.length] = new Option(year, year)
        }
    }

    // once year is selected
    selectYear.onchange = (e) =>{

        // allow make selection
        selectMake.disabled = false
        selectModel.disabled = true

        // enable selection
        selects.forEach(select => {
            if(select.disabled === true){
                select.style.cursor = "auto"
            }
            else{
                select.style.cursor = "pointer"
            }
        })

        selectMake.length = 1
        selectModel.length = 1

        for(let make in vehicleInfo[selectType.value][e.target.value]){
            selectMake.options[selectMake.options.length] = new Option(make, make)
        }
    }

    // after make selected
    selectMake.onchange = (e) =>{
        selectModel.disabled = false

        selects.forEach(select => {
            if(select.disabled === true){
                select.style.cursor = "auto"
            }
            else{
                select.style.cursor = "pointer"
            }
        })

        selectModel.length = 1

        let models = vehicleInfo[selectType.value][selectYear.value][e.target.value]

        for(let i=0; i<models.length; i++){
            selectModel.options[selectModel.options.length] = new Option(models[i], models[i])
        }

        document.getElementById("userForm").addEventListener("submit", printSearchValue);

        function printSearchValue(){
            const inputType = document.getElementById("type").value;
            const inputYear = document.getElementById("year").value;
            const inputMake = document.getElementById("make").value;
            const inputModel = document.getElementById("model").value;
            // console.log(inputType);
            // console.log(inputYear);
            // console.log(inputMake);
            // console.log(inputModel);

            let mechanic = mechanicInfo.find(mechanic => mechanic.year === inputYear);

            // const someText = (mechanic.name+ " Works on:\n Type: " + inputType + "\n Year: " + inputYear + "\n Make: "
            // + inputMake + "\n Model: " + inputModel);

            mechanicName.innerHTML = ("Mechanic: " + mechanic.name);
            vehicleType.innerHTML = ("Type: " + inputType);
            vehicleYear.innerHTML = ("Year: " + inputYear);
            vehicleMake.innerHTML = ("Make: " + inputMake);
            vehicleModel.innerHTML = ("Model: " + inputModel);
        }


    }



    // Get the modal
    const modals = document.getElementById("myModal");

    // Get the button that opens the modal
    const btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    const span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modals.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modals.style.display = "none";
    }

    // When user clicks anywhere outside the modal, close it
    window.onclick = function(event) {
        if (event.target === modals) {
            modals.style.display = "none";
        }
    }
}
