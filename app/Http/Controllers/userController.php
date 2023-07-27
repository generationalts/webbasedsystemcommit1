<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\motivation;
use App\Models\comments;
use App\Models\commentreplies;
use App\Models\User;

use App\Models\like;

class userController extends Controller
{



    public function index()
    {
        $quotes = [
            "Trust in the Lord with all your heart and lean not on your own understanding; In all your ways submit to him, and he will make your paths straight. - Proverbs 3:5-6",
            "You are never too old to set another goal or to dream a new dream. - C.S. Lewis",
            "Success is not final, failure is not fatal: it is the courage to continue that counts. - Winston Churchill",
            "So let each one give as he purposes in his heart, not grudgingly or of necessity; for God loves a cheerful giver.- 2 Corinthians 9:7",
            "And God is able to bless you abundantly, so that in all things at all times, having all that you need, you will abound in every good work.- 2 Corinthians 9:8",
            "Freely you have received; freely give.- Matthew 10:8 " ,
            "Give, and it will be given to you. A good measure, pressed down, shaken together and running over, will be poured into your lap. For with the measure you use, it will be measured to you. - Luke 6:38",

                "Each of you should give what you have decided in your heart to give, not reluctantly or under compulsion, for God loves a cheerful giver.- 2 Corinthians 9:7",

                "Honor the Lord with your wealth, with the firstfruits of all your crops; then your barns will be filled to overflowing, and your vats will brim over with new wine. - Proverbs 3:9-10",

                "Bring the whole tithe into the storehouse, so that there may be food in My house, and test Me now in this,",
                "if I will not open for you the windows of heaven and pour out for you a blessing until it overflows.- Malachi 3:10",

                "Remember this: Whoever sows sparingly will also reap sparingly, and whoever sows generously will also reap generously. - 2 Corinthians 9:6",

                "For you know the grace of our Lord Jesus Christ, that though he was rich, yet for your sake he became poor, so that you through his poverty might become rich.- 2 Corinthians 8:9",
                "He who has a generous eye will be blessed, for he gives of his bread to the poor.- Proverbs 22:9" ,

                "Do not store up for yourselves treasures on earth, where moth and rust destroy, and where thieves break in and steal. But store up for yourselves treasures in heaven, where moth and rust do not destroy, and where thieves do not break in and steal.- Matthew 6:19-20" ,

                "And when you give a feast, invite the poor, the maimed, the lame, the blind. And you will be blessed, because they cannot repay you; for you shall be repaid at the resurrection of the just.- Luke 14:13-14",

                "One gives freely, yet grows all the richer; another withhold what he should give, and only suffers want.- Proverbs 11:24",

                "For if there is first a willing mind, it is accepted according to what one has, and not according to what he does not have.- 2 Corinthians 8:12",

                "For where your treasure is, there your heart will be also.- Matthew 6:21",

                "The generous soul will be made rich, and he who waters will also be watered himself.- Proverbs 11:25",

                "Let each of you look out not only for his own interests, but also for the interests of others.- Philippians 2:4" ,

                "It is more blessed to give than to receive.- Acts 20:35" ,

                "Blessed are those who consider the poor; the Lord delivers them in times of trouble. - Psalm 41:1",

                "The wicked borrows and does not repay, but the righteous shows mercy and gives.- Psalm 37:21",

                "A man's gift makes room for him, and brings him before great men. - Proverbs 18:16",

                "Do not withhold good from those to whom it is due, when it is in your power to do it. - Proverbs 3:27",

                "And they gave according to their means, as of their ability, to the treasury of the work. - Ezra 2:68",

                "And do not forget to do good and to share with others, for with such sacrifices God is pleased. - Hebrews 13:16",

                "And by their prayer for you, who long for you because of the exceeding grace of God in you. - 2 Corinthians 9:14",

                "Sow for yourselves righteousness; reap in mercy; break up your fallow ground, for it is time to seek the Lord, till He comes and rains righteousness on you. - Hosea 10:12",

                "For God loves a person who gives cheerfully.- 2 Corinthians 9:7",

                "It is more blessed to give than to receive.- Acts 20:35",

                "A generous person will prosper; whoever refreshes others will be refreshed.- Proverbs 11:25" ,
            // Add more quotes as needed
        ];

        $randomQuote = $quotes[array_rand($quotes)];

        $users = User::whereIn('role', [1, 0])->get();
        $userId = auth()->user()->id;

        $dailymotives = Motivation::latest()->get();
        $dailymotives->load('comments.commentreplies'); // Eager load comments and comment replies

        return view('dashboards.user.index', compact('dailymotives', 'users', 'userId', 'randomQuote'));
    }


    public function create() {



        return view('dashboards.user.index', compact('users'));
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('dashboards.admin.edit', compact('user'));
    }
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'role' => 'required',
        ]);

        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->contact = $validatedData['contact'];
        $user->role = $validatedData['role'];

        // Update password only if provided
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();

        return redirect()->back()->with('success', 'User updated successfully.');
    }



    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully.');
    }


    }

