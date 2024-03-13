const dropContainer = document.getElementById("dropcontainer");
const fileInput = document.getElementById("excel");

dropContainer.addEventListener("dragover", (e) => {
  e.preventDefault();
});

dropContainer.addEventListener("dragenter", () => {
  dropContainer.classList.add("drag-active");
});

dropContainer.addEventListener("dragleave", () => {
  dropContainer.classList.remove("drag-active");
});

dropContainer.addEventListener("drop", (e) => {
  e.preventDefault();
  dropContainer.classList.remove("drag-active");

  // Dapatkan file yang di-drop
  const files = e.dataTransfer.files;

  // Tetapkan file ke elemen input file
  fileInput.files = files;
  // Jika Anda ingin memperbarui tampilan label "no file chosen"
  fileInput.dispatchEvent(new Event('change'));
});