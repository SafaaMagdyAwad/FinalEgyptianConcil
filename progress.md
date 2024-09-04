## important steps
    ** it was fun to change the design of login $register and as well changing the code. 

## public section
    ** i used job to send emails

    ** i tried to keeb on the same design of the frontend and didnt care of the large code , it was fun to see that the site was looking good.
        -- i made seeder looks more real.

    ** i added a static map instead of the old one

    **search was programmed , i created a new blade to display the search results

    ** active classe active('route') was created and added to the navbar to make the site more dinamic and realistic  used in public Navbar


## error messages in login , register dont appear
    solved they appear now

## user can't login if was not active  
  done! only active validated users can login

## this caused a broblem that when user was registring the code was redirecting to home when user()->is_active is false
    so i disactevated this line 
            $this->guard()->login($user); in RegistersUsers
            and redirected to /  after registration
            After login user will be redirected to /admin/topic

## future planes
    ** now , i will think of something to do with newsletter & multi lang the site

## using factory makes som images null 
    'image'=>basename(fake()->image(public_path('assets/admin/images/topics'))),
    solved there is no null images now

## checkpox old
done 