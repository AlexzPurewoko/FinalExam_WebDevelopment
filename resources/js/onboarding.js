import { Datepicker } from 'flowbite';


const datepickerElement = document.getElementById('default-datepicker');
const datepicker = new Datepicker(datepickerElement, {
    'format': 'yyyy-mm-dd'
});
datepicker.show();
