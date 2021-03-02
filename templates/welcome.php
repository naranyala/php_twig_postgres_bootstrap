<!DOCTYPE html>
<html lang="en">

   <head>
      {% include 'header.php' %}
   </head>

   <body>

      {% embed 'crew.php' %} {% endembed %}
      <div class="container">
         <div class="row">
            <table class="table table-bordered">
               <thead style="font-weight:bold">
                  <tr>
                     <td>ID User</td>
                     <td>Nama</td>
                     <td>Username</td>
                     <td>Password</td>
                     <td>Level</td>
                  </tr>
               </thead>
               <tbody>
                  {% for data in crm_users %}
                  <tr>
                     <td>{{ data.id_user }}</td>
                     <td>{{ data.nama_user }}</td>
                     <td>{{ data.username }}</td>
                     <td>{{ data.password }}</td>
                     <td>{{ data.level }}</td>
                  </tr>
                  {% endfor %}
               </tbody>
            </table>
         </div>
      </div>

      <div class="container" style="margin-top:50px;margin-bottom:10px;">
         <div class="col-md-12">
            {% embed 'grid.php' %}
            {% block col2 %}
            <div class="row">
               <div class="col-6">
                  <h2>3</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt velit voluptatem cupiditate,
                     fugiat
                     aut
                     veritatis temporibus dolores nesciunt laudantium perspiciatis quae dolor debitis officiis tenetur
                     in
                     aliquid iusto inventore quisquam.</p>
               </div>
               <div class="col-6">
                  <h2>4</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt velit voluptatem cupiditate,
                     fugiat
                     aut
                     veritatis temporibus dolores nesciunt laudantium perspiciatis quae dolor debitis officiis tenetur
                     in
                     aliquid iusto inventore quisquam.</p>
               </div>
            </div>
            {% endblock col2 %}
            {% endembed %}

            <!-- mengulangi notice block -->
            <!--block('notice') -->
         </div>
      </div>

      {% include 'footer.php' %}
   </body>

</html>
