# Kata Pomodoro

The objective is to develop (using TDD) an app that behaves the same way as the kitchen timer. As the Pomodoro method is well-known so the kata takes its name.
To remember some of the features about what a 'pomodoro' is, here there are some of them:

###Creation Phase

* A pomodoro cannot take longer than 25 minutes.
* By default it takes 25 minutes.
* You can create a pomodoro no matter the duration is.

###Stop Phase

* A recently created pomodoro is stopped.
* As soon as a pomodoro starts a countdown is shown.
* A pomodoro cannot be finished until it is not started.
* A pomodoro finishes when the time is over.
* A pomodoro does not finish until the time is over.

###Interruptions

* A pomodoro is started without interruptions.
* If a pomodoro is not started it cannot be interrupted.
* The pomodoro counts the interruptions (1,2,3...)

###Reset

* When a pomodoro is reset, the interruptions return to 0.
* When a pomodoro is reset, the time starts from 0.
* After reset, the pomodoro needs to be played again.

BONUS: Would you create the UI? It could be funny !
