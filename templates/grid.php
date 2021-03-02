 {% block notice %}
 <div class="row">
    <div class="col-6">
       <h2>1</h2>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt velit voluptatem cupiditate, fugiat aut
          veritatis temporibus dolores nesciunt laudantium perspiciatis quae dolor debitis officiis tenetur in
          aliquid iusto inventore quisquam.</p>
    </div>
    <div class="col-6">
       {% block col2 %}
       <h2>2</h2>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt velit voluptatem cupiditate, fugiat aut
          veritatis temporibus dolores nesciunt laudantium perspiciatis quae dolor debitis officiis tenetur in
          aliquid iusto inventore quisquam.</p>
       {% endblock col2 %}
    </div>
 </div>
 {% endblock %}
