var row = new Vue({
    el: '#app-0',
    data: {
        list: [
            { time: 'Іван', name: 'Іванов', status: 'Іванов@gmail.com' },
            { time: 'Іва', name: 'Іван', status: 'Івановil.com' }
        ],
        timeOt: "",
        timeDo: "",
        request: ""
    }
})
window.onload = function(){
    axios.post('table.php', {
        getTime: 'getTime'
      })
      .then(function (response) {
        console.log(response);
      })
      .catch(function (error) {
        console.log(error);
      });
}


// import axios from 'axios';

// export default {
//     data() {
//         return {
//             postBody: {   // пример данных для отправки(позже они преобразуются в json)
//                 ot: ,
//                 do:
//             },
//             errors: []    // массив для записи ошибок
//         }
//     },
//     methods: {
//         postPost: function () {

//             axios.post(`table.php`, {

//                 body: this.postBody                            
//             })
//                 .then(response => { })
//                 .catch(e => {
//                     this.errors.push(e)
//                 })
//         }
//     }
// }