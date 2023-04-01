// const route = (event) => {
//     event = event || window.event;
//     event.preventDefault();
//     window.history.pushState({}, "", event.target.href);
//     handleLocation();
// };
// const routes = {

//     "/": "pages/index.html",
//     "/ABOUT": "pages/index.html#ABOUT",
//     // "/CONTACT": "pages/index.html",
//     "/team": "pages/team.html",
//     // "/campaigns": "pages/index.html"
// }
// const handleLocation = async () => {
//     const path = window.location.pathname;
//     const route = routes[path] || routes[404];
//     const html = await fetch(route).then((data) => data.text());
//     document.getElementById("main-page").innerHTML = html;
// }



// window.onpopstate = handleLocation();
// window.route = route;
// handleLocation();