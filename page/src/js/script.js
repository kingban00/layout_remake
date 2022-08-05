function welcome() {
  // Modal inicial
  const myModal = document.getElementById("myModal");
  const confirma = new bootstrap.Modal(myModal);
  // confirma.show();

  // Toasts
  const toastTriggerRed = document.getElementById("toastRedBtn");
  toastTriggerRed.addEventListener("click", toastRed);

  const toastTrigger = document.getElementById("toastGreenBtn");
  toastTrigger.addEventListener("click", toastGreen);

  const toastTriggerYellow = document.getElementById("toastYellowBtn");
  toastTriggerYellow.addEventListener("click", toastYellow);

  // Iphone Buttons

  const imgBtn01 = document.getElementById("img_btn01");
  imgBtn01.addEventListener("click", videoPlayer);

  const imgBtn02 = document.getElementById("img_btn02");
  imgBtn02.addEventListener("mouseover", () => {
    document.getElementById("msg_btn02").style.visibility = "visible";
  });
  imgBtn02.addEventListener("mouseout", () => {
    document.getElementById("msg_btn02").style.visibility = "hidden";
  });

  const imgBtn03 = document.getElementById("iphone_icon03");
  imgBtn03.addEventListener("click", () => {
    if (imgBtn01.style.display == "none") {
      imgBtn03.style.backgroundColor = "#c99d0f";
      imgBtn01.style.display = "flex";
      imgBtn02.style.display = "flex";
      imgBtn04.style.display = "flex";
    } else {
      imgBtn03.style.backgroundColor = "red";
      imgBtn01.style.display = "none";
      imgBtn02.style.display = "none";
      imgBtn04.style.display = "none";
    }
  });
  const imgBtn04 = document.getElementById("img_btn04");
  imgBtn04.addEventListener("click", criarText);
}

// Toasts

function toastGreen() {
  const toastLiveExample = document.getElementById("toastGreen");
  const toast = new bootstrap.Toast(toastLiveExample);
  toast.show();
}

function toastRed() {
  const toastLiveExampleRed = document.getElementById("toastRed");
  const toast = new bootstrap.Toast(toastLiveExampleRed);
  toast.show();
}
function toastYellow() {
  const toastLiveExampleYellow = document.getElementById("toastYellow");
  const toast = new bootstrap.Toast(toastLiveExampleYellow);
  toast.show();
}

// End Toasts

// Iphone Buttons

function videoPlayer() {
  const myModal = document.getElementById("videoModal");
  const confirma = new bootstrap.Modal(myModal);
  confirma.show();

  const changeBtn = document.getElementById("videoBtnChange");
  changeBtn.addEventListener("click", mudarVideo);

  const closeBtn = document.getElementById("btn_close");
  const cancelBtn = document.getElementById("btn_cancel");
  closeBtn.addEventListener("click", pauseVideo);
  cancelBtn.addEventListener("click", pauseVideo);
}

function mudarVideo() {
  let player = document.getElementById("modalPlayer");
  if (player.src == "https://www.youtube.com/embed/h7MYJghRWt0")
    player.src = "https://www.youtube.com/embed/uozWirwqxJk";
  else player.src = "https://www.youtube.com/embed/h7MYJghRWt0";
}

function pauseVideo() {
  let player = document.getElementById("modalPlayer");
  if (player.src == "https://www.youtube.com/embed/uozWirwqxJk")
    player.src = "https://www.youtube.com/embed/uozWirwqxJk";
  else player.src = "https://www.youtube.com/embed/h7MYJghRWt0";
}

// Criar texto novo

function criarText() {
  const content = document.getElementById("img_text");

  if (content.children[2].id == "plus_p") {
    const novoP = document.getElementById("plus_p");

    if (novoP.style.display == "none") novoP.style.display = "flex";
    else novoP.style.display = "none";
  } else {
    const novoP = document.getElementById("new_p");
    content.insertBefore(novoP, content.children[2]);
    novoP.id = "plus_p";
    novoP.style.display = "flex";
  }
}
