var footerHtml = "";
footerHtml = footerHtml+ ('		<!--// .section -->\n');
footerHtml = footerHtml+ ('		<div class="footer">\n');
footerHtml = footerHtml+ ('			<div class="vp">\n');
footerHtml = footerHtml+ ('				<div class="t">\n');
footerHtml = footerHtml+ ('					<div class="r">\n');
footerHtml = footerHtml+ ('						<div class="c q1">\n');
footerHtml = footerHtml+ ('							<a href="./test.html" class="logo"><img src="C:\Users\dmseo\Desktop\공부\웹\병원 로고.PNG" alt="홍익대학병원"></a>\n');
footerHtml = footerHtml+ ('						</div>\n');
footerHtml = footerHtml+ ('						<div class="c q2">\n');
footerHtml = footerHtml+ ('							<div class="info">\n');
footerHtml = footerHtml+ ('								<div class="address">\n');
footerHtml = footerHtml+ ('									<p class="q1">30016 세종특별자치시 조치원읍 세종로 2639 (신안리 300) 홍익대학교 세종캠퍼스</p>\n');
footerHtml = footerHtml+ ('									<p class="q2">TEL. 044-860-2114</p>\n');
footerHtml = footerHtml+ ('								</div>\n');
footerHtml = footerHtml+ ('								<div class="copyright">\n');
footerHtml = footerHtml+ ('									<p lang="en">COPYRIGHT © HONGIK UNIVERSITY. ALL RIGHTS RESERVED.</p>\n');
footerHtml = footerHtml+ ('								</div>\n');
footerHtml = footerHtml+ ('							</div>\n');
footerHtml = footerHtml+ ('						</div>\n');
footerHtml = footerHtml+ ('					</div>\n');
footerHtml = footerHtml+ ('				</div>\n');
footerHtml = footerHtml+ ('			</div>\n');
footerHtml = footerHtml+ ('		</div>\n');
footerHtml = footerHtml+ ('		<!--// .section -->\n');
document.write(footerHtml);
function linkPage(url) {
	if(url.length>0) {
		if(url == "R") {
			alert("준비중입니다.");
		} else {
			window.open(url,"","");
		}
	}
}
