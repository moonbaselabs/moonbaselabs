let scene = document.getElementById('hero');
    window.onmousemove = ({ clientX, clientY }) => {
        let x = ((window.innerWidth / 2) - clientX) / window.innerWidth * -1
        let y = ((window.innerHeight / 2) - clientY) / window.innerHeight * -1
        scene.style.setProperty("--x", (x * 100) + '%');
        scene.style.setProperty("--y", (y * 100 / 10) + '%');
    }
    window.ondeviceorientation = function ({ gamma, beta }) {
        window.onmousemove = null
        let tiltX = (window.orientation % 180 === 0) ? gamma : -beta
        let tiltY = (window.orientation % 180 === 0) ? beta : -gamma
        let x = tiltX / 270 * -1
        let y = tiltY / 270 * -1
        scene.style.setProperty("--x", (x * 100) + '%');
        scene.style.setProperty("--y", (y * 100 / 10) + '%');
    }