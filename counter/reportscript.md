# 🎤 The "Unboring" Presentation Script: Global Likes System

## 1. The Hook (The "Why")
"Hey everyone! Ever wonder how a 'Like' on a social media app doesn't just vanish when you refresh the page or click on a profile? It's not magic—it's consistent state management. Today, we're looking at the **Singleton Pattern**, the bouncer of our application that makes sure we only ever have **one** source of truth."

## 2. The Problem (The Mess)
"Imagine if every time you went to a new page, the app created a *brand new* counter. 
- You like a post on the News Feed. 
- You click the article... and the like is gone. 
- You go to the profile... and it's zero again. 
That's a terrible user experience. We need a way to keep that count consistent everywhere."

## 3. The Solution (The Singleton)
"Enter the **Singleton**. In our `Counter.php`, we did three things to keep things simple:
1. **Lock the Door:** We made the constructor `private`. You can't just say `new Counter()`. It's forbidden!
2. **The VIP Entrance:** You have to ask the class for the instance using `getInstance()`. If it exists, you get the same one everyone else is using.
3. **The Memory Bank:** We used PHP Sessions so the Singleton 'remembers' the count even if you jump between pages."

## 4. The "Reset" Button (Our Safety Net)
"You'll notice we added a **Reset** button. In a real app, you might not want users to reset global likes, but for our presentation, it's our 'Magic Eraser.' It proves that when we reset the data in the Singleton, it resets **everywhere** instantly because there's only one object in memory."

## 5. The Grand Finale
"When I click 'Like' here, and it shows up there, it's not two different counters talking to each other. It's the **exact same object** being viewed from different windows. It’s efficient, it’s clean, and it keeps our data from having an identity crisis. Thanks for listening!"
