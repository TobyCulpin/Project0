document.getElementById("themeButton").onclick = nextTheme

var themeMap = 
{
        dark: "light",
        light: "solar",
        solar: "dark"
};

var currentTheme = "dark"


function nextTheme()
{
        let nextTheme = themeMap[currentTheme];

        swapTheme(currentTheme, nextTheme)

        currentTheme = nextTheme;
}

function swapTheme(current, next)
{
        document.body.classList.remove(current);
        document.body.classList.add(next);
}