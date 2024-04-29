const answer = ["check", "green", "joker", "class", "reply", "input", "crush "];
const dialog1 = document.querySelector(".dialog1");
const sub = document.querySelector(".sub");
const inputtool = document.querySelector(".wordInput");
const dialog2 = document.querySelector("dialog");
const rankText = document.querySelector(".pText");

rankText.textContent = "회";
rankText.style.marginLeft = "210px";

let random = answer[Math.floor(Math.random() * answer.length)];
let count = 0;

sub.addEventListener("click", () => {
  const input = document.querySelectorAll(".input");
  const inputAll = document.querySelectorAll("input");
  console.log(inputAll);
  const allInputsFilled = Array.from(input).every((inputElement) => inputElement.value.trim() !== "");

  // 입력값이 하나라도 없으면 함수를 종료
  if (!allInputsFilled) {
    console.log("모든 입력값을 채워주세요.");
    return;
  }

  let checked = true;

  for (let i = 0; i < input.length; i++) {
    if (input[i].value === random[i]) {
      input[i].style.background = "green";
    } else if (random.includes(input[i].value)) {
      input[i].style.background = "yellow";
      checked = false;
    } else {
      input[i].style.background = "lightgrey";
      checked = false;
    }
    input[i].classList.remove("input");
  }

  if (checked) {
    dialog1.style.display = "block";
    const attemptText = count + 1 + "회"; // 시도 횟수를 가져와서 텍스트 생성
    rankText.textContent = attemptText; // 시도 횟수를 성공 다이얼로그에 표시
    return;
  } else {
    dialog1.style.display = "none";
  }

  count++; // 시도 횟수 증가

  console.log(input);
  if (inputAll.length < 35) {
    let template = `
    <div style="gap: 5.5px; display: flex; justify-content: center; margin-right: 195px; margin-top: 20px;">
    <input type="text" maxlength="1" class="input" />
    <input type="text" maxlength="1" class="input" />
    <input type="text" maxlength="1" class="input" />
    <input type="text" maxlength="1" class="input" />
    <input type="text" maxlength="1" class="input" />
    </div>
    `;

    document.querySelector(".bg").insertAdjacentHTML("beforeend", template);
  } else {
    dialog2.showModal();
  }
});
