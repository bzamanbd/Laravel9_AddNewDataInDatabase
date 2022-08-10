<center>
 <h2>Add New Member</h2><br><br>
  <form action="addnew" method="POST">
   @csrf
   <input type="text" name="name" placeholder="Enter Name"><br><br>
   <input type="email" name="email" placeholder="Enter Email"><br><br>
   <button type="submit">Add Member</button>
  </form>
</center>