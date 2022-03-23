function scrollToElem(id) {
    document.getElementById(id).scrollIntoView();
}

function scrollToPortfolio() {
    scrollToElem("portfolio");
}

function scrollToDocs() {
    scrollToElem("docs");
}

// highlight navbar based on front-page scroll or single page url

const navlinks = [
        ...document.getElementById("navbar").getElementsByTagName("a"),
    ],
    front = document.getElementById("front-page");

function getPositions() {
    const result = {};
    navlinks
        .filter((navlink) => navlink.href.includes("#"))
        .map((navlink) => navlink.href.split("#")[1])
        .forEach(
            (id) =>
            (result[id] =
                document.getElementById(id)?.getBoundingClientRect().top +
                front?.scrollTop)
        );
    return result;
}

const positions = getPositions();

function scrollHandler() {
    const front = document.getElementById("front-page");
    let highlight;
    if (front) {
        highlight = Object.entries(positions)
            .sort((a, b) => a[1] - b[1])
            .filter(([k, v]) => v < front.scrollTop + 200)
            .pop()?. [0];
    }
    navlinks.forEach((navlink) => {
        navlink.classList.remove("normal");
        navlink.classList.remove("highlighted");
        navlink.classList.add(
            (front && navlink.href.includes("#" + highlight)) ||
            (!front && navlink.href === window.location.href) ?
            "highlighted" :
            "normal"
        );
    });
}

window.onload = scrollHandler;

if (front) {
    front.onscroll = scrollHandler;
}
