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

function getPositions(navbuttons) {
    const result = {};
    navbuttons
        .map((navbutton) => navbutton.getAttribute("data-id"))
        .forEach(
            (id) =>
            (result[id] =
                document.getElementById(id).getBoundingClientRect().top +
                front.scrollTop)
        );
    return result;
}

function scrollHandler(positions, navbuttons) {
    const cn = "highlighted",
        front = document.getElementById("front-page"),
        highlight = document.getElementsByClassName(cn)[0]?.getAttribute("data-id");
    if (front) {
        const compare = nowViewingId(front.scrollTop, positions);
        if (compare !== highlight) {
            highlight && getNavButton(highlight, navbuttons).classList.remove(cn);
            compare && getNavButton(compare, navbuttons).classList.add(cn);
        }
    }
}

function nowViewingId(scrollTop, positions) {
    // find smallest difference in scroll position to find correct elem id:
    const overlap = 200,
        relativePositions = Object.entries(positions)
        .map(([k, v]) => [k, scrollTop - v + overlap])
        .filter(([k, v]) => v >= 0),
        viewingId = relativePositions.sort((a, b) => a[1] - b[1])[0]?. [0];
    // console.log(scrollTop, positions, viewingId);
    // console.table(relativePositions);
    return viewingId;
}

function getNavButton(highlight, navbuttons) {
    return navbuttons.find(
        (navbutton) => navbutton.getAttribute("data-id") === highlight
    );
}

const front = document.getElementById("front-page"),
    navlinks = [...document.getElementById("navbar").getElementsByTagName("a")];

function frontPageScrolling(navbuttons, front) {
    const positions = getPositions(navbuttons);
    scrollHandler(positions, navbuttons);
    front.onscroll = () => scrollHandler(positions, navbuttons);
}

// scroll buttons on front page for a smoother experience
// (overrides default page-reloading behavior of anchor links)
if (front) {
    navbuttons = navlinks
        .filter((navlink) => navlink.href.includes("#"))
        .map((anchorlink) => {
            const button = document.createElement("button"),
                id = anchorlink.href.split("#")[1];
            button.setAttribute("data-id", id);
            button.onclick = () => scrollToElem(id);
            button.innerHTML = anchorlink.innerHTML;
            anchorlink.parentNode.replaceChild(button, anchorlink);
            return button;
        });
    frontPageScrolling(navbuttons, front);
    window.onresize = () => frontPageScrolling(navbuttons, front);
} else {
    navlinks
        .find((navlink) => navlink.href === window.location.href)
        .classList.add("highlighted");
}
