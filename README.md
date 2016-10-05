## a living style guide package for Laravel

#### what I want to do:

I want to build an UI Pattern Library where one can develop a component in complete isolation. 
This component is also a blade partial file and can be included in your app right away, thus achiving a real living style guide.

Ideally, a change a in a component would be instantly reflected in your application.

A component is a directory with:

- blade file
- scss file
- javascript file
- json file, for data.

This should be good for javascript frameworks such as Vue, you can import you vue component in the javascript file and have a blade file with just the component call: ```<example></example>```

