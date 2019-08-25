document.body.addEventListener("mousemove", function(e) {
    startParallax(e, rocket, -1, 25);
    startParallax(e, cloudes, 1, 30);
    startParallax(e, notebook, -1, 150);
});

function startParallax(e, element, dir, speed) {
    let mousePosition = getMousePos(e.clientX, e.clientY);
    let elementCenterX = element.offsetLeft + (element.offsetWidth / 2);
    let elementCenterY = element.offsetTop + (element.offsetHeight / 2);
    let moveX = mousePosition.x - elementCenterX;
    let moveY = mousePosition.y - elementCenterY;

    if (Math.abs(moveX) < 500 && moveY < 200) {
        element.style.transform = "translate(" + (dir * moveX) / speed + "px, " +
                                  (dir * moveY) / speed + "px)";
    }

}

function getMousePos(x, y) {
    let rect = parallax.getBoundingClientRect();
    let xPos = Math.floor(x - rect.left) / (rect.right - rect.left) *
               parallax.offsetWidth;
    let yPos = Math.floor(y - rect.top) / (rect.bottom - rect.top) *
               parallax.offsetHeight;

    return { x: xPos, y: yPos };
}
