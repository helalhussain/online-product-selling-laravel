<style>
    /* ------------------ Footer Menu ------------------- */
.footer {
    /* background: #2B325C; */
    color: #ffffff;
    padding: 40px 0px;
}
.footer-body {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: flex-start;
}

.footer ul li a {
    color: #ffffff;
    line-height: 35px;
    text-decoration: none;
}
.footer ul li a:hover {
    color: var(--highlightText);
    line-height: 35px;
}
.social_icon{
    font-weight: 400;
    color: white;
    font-size: 40px;
    margin-right: 6px;
}
.social_icon:hover{
    font-weight: 400;
    /* color: var(--highlightText); */
   
    font-size: 40px;
    margin-right: 6px;
}

@media screen and (max-width:600px) {
    .foot-menu {
        margin: 30px 0;
    }
    .footer-body {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        flex-direction: column;
        align-content: flex-start;
        flex-wrap: nowrap;
    }
}
/*-------------------------- footer end --------------------------*/
</style>
<br/>
<div class="footer bg-success">
        <div class="container">
                   <div class="row">
                    <div class="col-md-7">
                        <div class="foot-about">
                            <h4>Developed by 
                                Helal Hussain</h4>
                            <span style = 'font-size: 18px;font-weight: 400;'>Copyright © 2022. All Rights Reserved.</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="foot-menu">
                            <ul>
                                <li>
                                    <a href="#">FAQs</a>
                                </li>
                                <li>
                                    <a href="#">About us</a>
                                </li>
                                <li>
                                    <a href="#">Contact us</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="follow-us">
                            <h4 >Follow us</h4>
                            <div class="social-icon">
                                <a href = '#'><i class="fa social_icon fa-facebook-square"></i></a>
                                <a href = '#'><i class="fa social_icon fa-twitter-square"></i></a>
                                <a href = '#'><i class="fa social_icon fa-linkedin-square"></i> </a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>