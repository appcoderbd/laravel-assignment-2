<!doctype html>
<html lang="bn">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>পোস্ট ভিউ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="color-scheme" content="light dark" />
  </head>
  <body class="bg-gray-50 text-gray-800 dark:bg-gray-900 dark:text-gray-100">
    <div class="min-h-screen">
      <!-- Top Bar -->
      <header class="border-b border-gray-200 dark:border-gray-800 bg-white/80 dark:bg-gray-900/80 backdrop-blur sticky top-0 z-10">
        <div class="max-w-4xl mx-auto px-4 py-3 flex items-center justify-between gap-3">
          <a href="{{ route('posts.index') }}" class="inline-flex items-center gap-2 text-sm text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white">
            <!-- back icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.5 19.5L3 12l7.5-7.5M3 12h18" /></svg>
            ফিরে যান
          </a>
          <button id="themeToggle" class="rounded-xl px-3 py-1.5 text-sm border border-gray-200 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800">ডার্ক/লাইট</button>
        </div>
      </header>

      <main class="max-w-4xl mx-auto p-4 sm:p-6">
        <article class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm ring-1 ring-gray-100 dark:ring-gray-700 overflow-hidden">
          <!-- Cover Image -->
          <figure class="relative">
            <img
              class="w-full aspect-[16/9] object-cover"
              src="{{ asset('storage/' . $post->post_images) }}"
              alt="পোস্ট কভার ইমেজ"
            />
          </figure>

          <div class="p-6 sm:p-8">
            <!-- Category + Meta -->
            <div class="flex flex-wrap items-center gap-3 mb-4">
              <a href="#" class="inline-flex items-center gap-1.5 rounded-full bg-indigo-50 text-indigo-700 dark:bg-indigo-900/40 dark:text-indigo-200 px-3 py-1 text-xs font-semibold">
                <!-- tag icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4"><path d="M2.25 12.76V6.75A2.25 2.25 0 014.5 4.5h6.01c.597 0 1.17.237 1.59.659l7.282 7.282a2.25 2.25 0 010 3.182l-4.24 4.24a2.25 2.25 0 01-3.182 0L3.909 14.35a2.25 2.25 0 01-.659-1.59z"/></svg>
                {{ $post->category->name }}
              </a>
              <time class="text-xs text-gray-500 dark:text-gray-400">{{ $post->created_at->translatedFormat('d F, Y') }}</time>
              <span class="text-xs text-gray-400">•</span>
              <span class="text-xs text-gray-500 dark:text-gray-400">পড়তে লাগবে ~ ৪ মিনিট</span>
            </div>

            <!-- Title -->
            <h1 class="text-3xl sm:text-4xl font-bold tracking-tight leading-tight mb-3">
              {{ $post->title }}
            </h1>

            <!-- Optional excerpt -->
            <p class="text-gray-600 dark:text-gray-300 text-base mb-6">
              {{ $post->content }}
            </p>

            <!-- Description / Content -->
            <div class="prose prose-indigo max-w-none dark:prose-invert">
              <p>
                {{ $post->content }}
              <blockquote>
                "টেইলউইন্ড দিয়ে UI বানানো মানে Lego দিয়ে বিল্ড করা—দ্রুত, নমনীয়, মজার।"
              </blockquote>
              <p>
                আপনার কনটেন্ট <em>SEO-friendly</em> করার জন্য সঠিক ট্যাগ এবং স্ট্রাকচার বজায় রাখুন।
              </p>
            </div>
          </div>
        </article>

        <!-- Author / footer (optional) -->
        <footer class="mt-8 flex items-center justify-between text-sm text-gray-500 dark:text-gray-400">
          <div class="flex items-center gap-3">
            <img class="w-9 h-9 rounded-full object-cover" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?q=80&w=400&auto=format&fit=crop" alt="লেখকের ছবি">
            <div>
              <div class="font-semibold text-gray-700 dark:text-gray-200">নাজিম উদ্দিন</div>
              <div>ফুল-স্ট্যাক ডেভেলপার</div>
            </div>
          </div>
          <div class="inline-flex gap-2">
            <a href="#" class="px-3 py-1.5 rounded-lg border border-gray-200 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800">শেয়ার</a>
            <a href="#" class="px-3 py-1.5 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700">আরও পড়ুন</a>
          </div>
        </footer>
      </main>
    </div>

    <script>
      // Simple theme toggle for demo
      const btn = document.getElementById('themeToggle');
      btn?.addEventListener('click', () => {
        document.documentElement.classList.toggle('dark');
        localStorage.theme = document.documentElement.classList.contains('dark') ? 'dark' : 'light';
      });
      // Load previously selected theme
      if (
        localStorage.theme === 'dark' ||
        (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
      ) {
        document.documentElement.classList.add('dark');
      }
    </script>


  </body>
</html>
