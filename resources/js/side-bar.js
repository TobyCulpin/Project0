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

        darkLink1: `#6e9ac8`,
        darkLink2: `#c563dd`,
        darkLink3: `#c563dd`,
        darkLink4: `#c563dd`,


        lightText1: `#1f1f1f`,
        lightText2: `#000000`,
        lightText3: ``,

        lightBG1: `#f0f0f0`,
        lightBG2: `#e0e0e0`,
        lightBG3: `#d0d0d0`,

        lightLink1: `#0000ee`,
        lightLink2: `#551a8b`,
        lightLink3: `#551a8b`,
        lightLink4: `#551a8b`,


        solarText1: `#43585f`,
        solarText2: `#4a7583`,
        solarText3: ``,

        solarBG1: `#f8e9c1`,
        solarBG2: `#dfcc9a`,
        solarBG3: `#cfb56d`,

        solarLink1: `#0000ee`,
        solarLink2: `#551a8b`,
        solarLink3: `#551a8b`,
        solarLink4: `#551a8b`,
};



function setValue(variable, value)
{
        
        document.documentElement.style.setProperty(variable, value);
}

function setTheme(theme)
{
        let i = 0;
        for (i=0; i < 3; i++)//Text
        {
                setValue(`--text-color${(i + 1).toString()}`,
                         colorMap[`${theme}Text${(i + 1).toString()}`]);
        }

        for (i=0; i < 3; i++)//Background
        {
                setValue(`--bg-color${(i + 1).toString()}`,
                         colorMap[`${theme}BG${(i + 1).toString()}`]);
        }

        for (i=0; i < 4; i++)//Links
        {
                setValue(`--link-color${(i + 1).toString()}`,
                        colorMap[`${theme}Link${(i + 1).toString()}`]);
        }
}

function nextTheme()
{
        let nextTheme = themeMap[currentTheme];

        setTheme(nextTheme);
        swapIcon(currentTheme, nextTheme)

        currentTheme = nextTheme;
}

function swapIcon(current, next)
{
        document.body.classList.remove(current);
        document.body.classList.add(next);
}