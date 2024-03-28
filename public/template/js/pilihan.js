document.getElementById("layanan").addEventListener("change", function() {
  var layanan = document.getElementById("layanan").value;
  if (layanan === "1") {
    document.getElementById("subLayanan").style.display = "block";
    document.getElementById("subOpsi1").style.display = "block";
    document.getElementById("subOpsi2").style.display = "none";
    document.getElementById("subOpsi3").style.display = "none";
  } else if (layanan === "2") {
    document.getElementById("subLayanan").style.display = "block";
    document.getElementById("subOpsi1").style.display = "none";
    document.getElementById("subOpsi2").style.display = "block";
    document.getElementById("subOpsi3").style.display = "none";
  } else if (layanan === "3") {
    document.getElementById("subLayanan").style.display = "block";
    document.getElementById("subOpsi1").style.display = "none";
    document.getElementById("subOpsi2").style.display = "none";
    document.getElementById("subOpsi3").style.display = "block";
  } else {
    document.getElementById("subLayanan").style.display = "none";
  }
});