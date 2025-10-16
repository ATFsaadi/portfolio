// Configuration des traductions avec système de fallback
const translations = {
    fr: {
       
    },
    en: {
       
    },
    ar: {
       
    }
};

let currentLanguage = 'fr';

function setLanguage(lang) {
    currentLanguage = lang;

    document.querySelectorAll("[data-i18n]").forEach(element => {
        const data = element.getAttribute("data-i18n");

        data.split(";").forEach(item => {
            item = item.trim();

            const match = item.match(/^\[(.+)\](.+)$/);
            if (match) {
                const attr = match[1];
                const key = match[2];
                if (translations[lang] && translations[lang][key]) {
                    element.setAttribute(attr, translations[lang][key]);
                }
            } else {
    
                if (translations[lang] && translations[lang][item]) {
                    element.textContent = translations[lang][item];
                }
            }
        });
    });

    if (lang === "ar") {
        document.body.setAttribute("dir", "rtl");
        document.body.classList.add("rtl");
    } else {
        document.body.setAttribute("dir", "ltr");
        document.body.classList.remove("rtl");
    }
}
