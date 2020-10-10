/*
 * Author: Rashintha Maduneth
 */

let components = [];

function loadScript(url) {
    if(!components.includes(url)){
        components.push(url);

        return new Promise((resolve, reject) => {
            const script = document.createElement('script');
            script.async = true;
            script.src = url;
            $('head').append(script);
        });
    }else{
        return null;
    }
}