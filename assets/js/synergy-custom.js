function setCookie(name, days, path = '/', domain = window.location.hostname) {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        var paramsObject = {};

        for (const [key, value] of urlParams.entries()) {
            paramsObject[key] = value;
        }
        
        let expires = "";
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }

        if (JSON.stringify(paramsObject) != "{}")
            document.cookie = name + "=" + JSON.stringify(paramsObject) + expires + "; path=" + path + "; domain=" + domain + "; SameSite=Lax";

        appendQueryStringToLinks();
    }


    // Function to get the value of a specific cookie by name
    function getCookie(name) {
        console.log('it ran');
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }   

    function appendQueryStringToLinks() {
        var queryParams = JSON.parse(getCookie("queryParams"));
        if (!queryParams) {
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
            const paramsObject = {};

            for (const [key, value] of urlParams.entries()) {
                paramsObject[key] = value;
            }
            if (JSON.stringify(paramsObject) == "{}")
                return;
            else
                queryParams = paramsObject;
        }

        const links = document.querySelectorAll('a[id="promptly"]');
        links.forEach(link => {
            var url = ""
            for (const [key, value] of Object.entries(queryParams)) {
                url = url + '&' + key + '=' + value;
            }
            link.href = link.href + url;
        });
		
		const csslinks = document.getElementsByClassName('schedule-link');
        var i = 0;
        for (i = 0; i < csslinks.length; i++) {
            var cssurl = ""
            for (const [ckey, cvalue] of Object.entries(queryParams)) {
                cssurl = cssurl + '&' + ckey + '=' + cvalue;
            }
            csslinks[i].href = csslinks[i].href + cssurl;
        }
    }



    setCookie('queryParams', 7);

