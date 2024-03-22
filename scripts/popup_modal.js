document.addEventListener("DOMContentLoaded", function () {
  const addCaseButton = document.getElementById("addCaseButton");
  const addForm = document.querySelector(".add-form");
  const overlay = document.getElementById("overlay");

  addCaseButton.addEventListener("click", function () {
    addForm.classList.toggle("show-form");
    overlay.style.display = addForm.classList.contains("show-form")
      ? "block"
      : "none";
  });

  const closeBtn = document.querySelector(".close-btn");
  closeBtn.addEventListener("click", function () {
    addForm.classList.remove("show-form");
    overlay.style.display = "none";
  });
});


document.addEventListener("DOMContentLoaded", function () {
  const editCaseButton = document.getElementById("editCaseButton");
  const editForm = document.querySelector(".edit-form");
  const overlay = document.getElementById("overlay");

  editCaseButton.addEventListener("click", function () {
    editForm.classList.toggle("show-form");
    overlay.style.display = editForm.classList.contains("show-form")
      ? "block"
      : "none";
  });

  const closeBtn = document.querySelector(".close-btn");
  closeBtn.addEventListener("click", function () {
    editForm.classList.remove("show-form");
    overlay.style.display = "none";
  });
});


