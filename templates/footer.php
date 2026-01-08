</main>
<footer>
<p><span>© Muhrid.com 2013-<?= date("Y") ?>. Hak Cipta Dilindungi Undang-Undang</span><span>Dibuat dengan ❤ oleh Muhammad Riduan</span></p>
</footer>

</div>
<script>function toggleTheme(){"dark"===document.documentElement.getAttribute("data-theme")?changeTheme("light"):changeTheme("dark")}function changeTheme(e){document.documentElement.setAttribute("data-theme",e),localStorage.setItem("theme",e)}window.onload=(e=>{const t=window.matchMedia("(prefers-color-scheme: dark)");localStorage.getItem("theme"),changeTheme(localStorage.getItem("theme")),t.addListener(e=>{e.matches?changeTheme("dark"):changeTheme("light")})});</script>

<!-- <script src="/public/assets/js/main.js"></script> -->

</div>
</body>
</html>