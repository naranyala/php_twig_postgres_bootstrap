{% block content %}
<div class="container">
   <div class="row my-5">
      <div class="col">
         <h1>Welcome {{ name }}!</h1>
         <p>You are <b> {{ age }}</b> years old</p>
         <p>Alamat <b>{{ alamat }}</b></p>
      </div>

   </div>
   <div class="row">

      <div class="col-xs-12 col-lg-12">
         <table style="width:100%;">
            <caption>
               <strong>{{ name }}</strong> - {{ type }} <em>( {{ owner }} )</em>
               | {{ attribute(_context,'reg-number') }}
            </caption>
         </table>
         <table class="table table-bordered">

            <thead>
               <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Role</th>
                  <th>Status</th>
                  <th>Notes</th>
                  <th>Badges</th>
                  <!--<th>Reg-number</th>-->
               </tr>
            </thead>
            <?php

            // set counter = 0
            //after loops
            // set counter = counter + 1
            //counter

            //*another
            //loop.index
            //*reverse
            //loop.revindex
            //loop.first
            //loop.last
            //loop.length
            ?>
            <tbody>
               {% for member in crew %}
               <tr class="
                  {% if member.status == 'Alive' %} bg-success text-white {% endif %}
                  {% if member.status == 'Dead' %} bg-danger text-white {% endif %}
                  {{ cycle(['odd','even'], loop.index + 1) }}
                  ">
                  <?php
                  //  set items = ['odd','even','third']
                  // cycle(items, loop.index + 1)

                  ?>
                  <td>{{ loop.length }}</td>
                  <td><strong>{{ member.name }} {{ attribute(member,'reg-number') }}</strong></td>
                  <td>{{ member['role'] }}</td>
                  <td>{{ member.status }}</td>
                  <td>{{ member.notes|upper|reverse }}</td>
                  <td class="p-auto">
                     {% for badge in member.badges %}
                     <span class="btn-sm btn-success {{ badge }}" style="margin:5px;">
                        {{ loop.parent.loop.index ~ '-' ~ badge }}
                     </span>

                     {% endfor %}
                  </td>
               </tr>
               {% endfor %}
            </tbody>
            </caption>
         </table>
      </div>
   </div>

</div>

{% endblock content %}
