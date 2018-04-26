<div class="uk-inline" style="margin-top:30px;">
  <div class="uk-container">
    <h1 class="uk-heading-divider">Products</h1>
    <div class="uk-margin uk-margin-medium-top uk-margin-medium-left uk-medium-margin-medium-bottom">
      <div id="divNewProductForm" style="display:none">
      </div>
      <div id="divEditProductForm" style="display:none">
      </div>
      <div id="divBlockQuotes" style="display:block">
        <blockquote>
          <span uk-icon="icon: github-alt"></span> I developed using git and github for source control
        </blockquote>
        <blockquote>
          <span uk-icon="icon: cog"></span> I used limonade, a micro framework for php
        </blockquote>
        <blockquote>
          <span uk-icon="icon: server"></span> This works using a REST api and jquery
        </blockquote>
        <blockquote>
          <i class="fa fa-hand-o-up"></i> The frontend was developed using Uikit
        </blockquote>
        <blockquote>
          <span uk-icon="icon: mail"></span> If you want to contact me: danilobatistaqueiroz@gmail.com
        </blockquote>
        <blockquote>
          <i class="fa fa-whatsapp"></i> I'm found on whatsapp too: +55(11)9.6451-5485
        </blockquote>
      </div>
    </div>
    <div class="uk-margin uk-margin-medium-top uk-margin-medium-left uk-margin-medium-bottom">
      <input type="button" class="uk-button uk-button-primary uk-button" value="new" onclick="newProduct();"/>
      <input type="text" name="search" placeholder="Search.." class="uk-input uk-form-width-medium uk-form-small">
      <table id="tableProducts" name="tableProducts" class="uk-table uk-table-hover">
        <thead>
          <tr>
            <th style="display:none">id</th>
            <th>name</th>
            <th>description</th>
            <th>price</th>
            <th>category</th>
            <th></th>
          </tr>
        </thead>
      </table>
    </div>
    <article class="uk-comment uk-comment-primary" style="margin-left:1%;width:95%">
      <header class="uk-comment-header">
        <img class="uk-comment-avatar" src="images/placeholder_avatar.svg" width="50" height="50" alt="">
        <h4 class="uk-comment-title">Danilo Batista de Queiroz</h4>
        <p class="uk-comment-meta">27.10.2017 | php developer | #</p>
      </header>
      <div class="uk-comment-body">
        <p>This is a crud application, an example using resful api with limonade in the backend and uikit for css/js in the frontend</p>
      </div>
    </article>
  </div>
</div>
