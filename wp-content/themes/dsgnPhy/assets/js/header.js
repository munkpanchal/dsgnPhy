const cursorDot = document.querySelector("[data-cursor-dot]");
const cursorBox = document.querySelector("[data-cursor-box]");

if (cursorBox && cursorDot) {
    window.addEventListener("mousemove", (e) => {
        const x = e.clientX;
        const y = e.clientY;

        cursorDot.style.left = x + "px";
        cursorDot.style.top = y + "px";

        cursorBox.animate(
            {
                left: x + "px",
                top: y + "px",
            },
            { duration: 400, fill: "forwards" }
        );
    });
}
