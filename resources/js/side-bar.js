document.getElementById(`themeButton`).onclick = nextTheme


var currentTheme = `dark`

var themeMap = 
{
        dark: `light`,
        light: `solar`,
        solar: `dark`
};

var colorMap =
{
        darkText1: `#b0b0b0`,
        darkText2: `#e0e0e0`,
        darkText3: ``,

        darkBG1: `#303030`,
        darkBG2: `#252525`,
        darkBG3: `#202020`,


        lightText1: `#1f1f1f`,
        lightText2: `#000000`,
        lightText3: ``,

        lightBG1: `#f0f0f0`,
        lightBG2: `#e0e0e0`,
        lightBG3: `#d0d0d0`,


        solarText1: `#43585f`,
        solarText2: `#4a7583`,
        solarText3: ``,

        solarBG1: `#f8e9c1`,
        solarBG2: `#dfcc9a`,
        solarBG3: `#cfb56d`,
};



function setValue(variable, value)
{
        
        document.documentElement.style.setProperty(variable, value);
}

function setTheme(theme)
{
        let n = 3;
        let i = 0;
        for (i=0; i < n; i++)
        {
                setValue(`--text-color${(i + 1).toString()}`,
                         colorMap[`${theme}Text${(i + 1).toString()}`]);
        }

        for (i=0; i < n; i++)
        {
                setValue(`--bg-color${(i + 1).toString()}`,
                         colorMap[`${theme}BG${(i + 1).toString()}`]);
        }
}

function nextTheme()
{
        let nextTheme = themeMap[currentTheme];

        setTheme(nextTheme);

        currentTheme = nextTheme;
}