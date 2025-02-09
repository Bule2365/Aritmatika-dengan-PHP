document
  .getElementById("calcForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    const expression = document.getElementById("expression").value;

    if (expression) {
      fetch("aritmatika.php", {
        method: "POST",
        body: new URLSearchParams(
          "expression=" + encodeURIComponent(expression)
        ),
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
      })
        .then((response) => response.text())
        .then((data) => {
          document.getElementById("result").innerHTML = "Hasil: " + data;
          document.getElementById("result").style.display = "block";
        })
        .catch((error) => {
          document.getElementById("result").innerHTML = "Terjadi kesalahan";
          document.getElementById("result").style.display = "block";
        });
    }
  });
