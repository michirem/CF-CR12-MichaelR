var btn = document.getElementById("gimme");

loadJoke();

btn.addEventListener("click", () => {
    loadJoke();
});

function loadJoke() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
      displayJoke(this);
      }
    };
    xhttp.open("GET", "actions/getjoke.php", true);
    xhttp.send();
  }

const displayJoke = (output) => {
    var target = document.getElementById("joke");
    var joke = output.responseText;
    target.innerHTML = joke;
};