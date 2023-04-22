// Animar Icone de Mensagem quando o valor for maior que zero
const navMsgIcon = document.querySelector(".msg_icon");
const MsgIcon = document.querySelector(".msg_icon i");

if(navMsgIcon.textContent > 0){
    MsgIcon.classList.add("fa-beat");
    MsgIcon.style.color="var(--theme_primary)";
}