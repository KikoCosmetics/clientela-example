<?php

?>
    <h2>HOME</h2>

    <p>Hello Lorenzo and Oto!</p>

    <p>This is a fake form we'll create programmatically to redirect the users on Clientela.</p>

    <form action="/kiko/data-handler" method="POST" novalidate>
        <div>
            <label>e-mail</label>
            <input name="email" 
               type="email"
               value="foo@gmail.com"
               required
               placeholder="email" />
        </div>
        <div>
            <label>First Name</label>       
            <input name="first_name" 
               type="text"
               value="Barry"
               required
               placeholder="First name" />
        
        </div>
        <div>
            <label>Last Name</label>
            <input name="last_name" 
                type="text"
                value="Allen"
                required
                placeholder="Last name" />
        </div>
        <button type="submit">Book your appointment!</button>
    </form>
<?php