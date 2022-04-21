<h2 class="text-center m-4">{lang key='ourMainServices'}</h2>

<div class="row my-5 action-icon-btns">
    <div class="col-6 col-md-4 col-lg">
        <a href="https://ecommerciar.com/cliente/store/planos-ecommerciar" class="card-accent-teal">
            <figure class="ico-container">
                <i class="fal fa-box"></i>
            </figure>
            {lang key='ourPlans'}
        </a>
    </div>
    <div class="col-6 col-md-4 col-lg">
        <a href="https://ecommerciar.com/cliente/store/outros-servicos" class="card-accent-pomegranate">
            <figure class="ico-container">
                <i class="fal fa-plus-square"></i>
            </figure>
            {lang key='servicosAdicionais'}
        </a>
    </div>
</div>

<h2 class="text-center m-4">{lang key='howCanWeHelp'}</h2>

<div class="row my-5 action-icon-btns">
    <div class="col-6 col-md-4 col-lg">
        <a href="{routePath('announcement-index')}" class="card-accent-teal">
            <figure class="ico-container">
                <i class="fal fa-bullhorn"></i>
            </figure>
            {lang key='announcementstitle'}
        </a>
    </div>
    <div class="col-6 col-md-4 col-lg">
        <a href="serverstatus.php" class="card-accent-pomegranate">
            <figure class="ico-container">
                <i class="fal fa-server"></i>
            </figure>
            {lang key='networkstatustitle'}
        </a>
    </div>
    <div class="col-6 col-md-4 col-lg">
        <a href="{routePath('knowledgebase-index')}" class="card-accent-sun-flower">
            <figure class="ico-container">
                <i class="fal fa-book"></i>
            </figure>
            {lang key='knowledgebasetitle'}
        </a>
    </div>
    <div class="col-6 col-md-4 offset-md-2 offset-lg-0 col-lg">
        <a href="{routePath('download-index')}" class="card-accent-asbestos">
            <figure class="ico-container">
                <i class="fal fa-download"></i>
            </figure>
            {lang key='downloadstitle'}
        </a>
    </div>
    <div class="col-6 offset-3 offset-md-0 col-md-4 col-lg">
        <a href="submitticket.php" class="card-accent-green">
            <figure class="ico-container">
                <i class="fal fa-life-ring"></i>
            </figure>
            {lang key='homepage.submitTicket'}
        </a>
    </div>
</div>

<h2 class="text-center m-4">{lang key='homepage.yourAccount'}</h2>

<div class="row my-5 action-icon-btns">
    <div class="col-6 col-md-4 col-lg">
        <a href="clientarea.php" class="card-accent-midnight-blue">
            <figure class="ico-container">
                <i class="fal fa-home"></i>
            </figure>
            {lang key='homepage.yourAccount'}
        </a>
    </div>
    <div class="col-6 col-md-4 col-lg">
        <a href="clientarea.php?action=services" class="card-accent-midnight-blue">
            <figure class="ico-container">
                <i class="far fa-cubes"></i>
            </figure>
            {lang key='homepage.manageServices'}
        </a>
    </div>
    {if $registerdomainenabled || $transferdomainenabled || $numberOfDomains}
        <div class="col-6 col-md-4 col-lg">
            <a href="clientarea.php?action=domains" class="card-accent-midnight-blue">
                <figure class="ico-container">
                    <i class="fal fa-globe"></i>
                </figure>
                {lang key='homepage.manageDomains'}
            </a>
        </div>
    {/if}
    <div class="col-6 col-md-4 offset-md-2 offset-lg-0 col-lg">
        <a href="supporttickets.php" class="card-accent-midnight-blue">
            <figure class="ico-container">
                <i class="fal fa-comments"></i>
            </figure>
            {lang key='homepage.supportRequests'}
        </a>
    </div>
    <div class="col-6 offset-3 offset-md-0 col-md-4 col-lg">
        <a href="clientarea.php?action=masspay&all=true" class="card-accent-midnight-blue">
            <figure class="ico-container">
                <i class="fal fa-credit-card"></i>
            </figure>
            {lang key='homepage.makeAPayment'}
        </a>
    </div>
</div>
