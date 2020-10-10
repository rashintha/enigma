/*
 * Author: Rashintha Maduneth
 */

const E404_COMPONENT = Vue.component('e404_component', function (resolve, reject) {
    axios.get('app/components/?404&html').then(({data}) =>{
        resolve({
            data(){
                return{
                    name: "DDD"
                };
            },
            template: data
        });
    });
});