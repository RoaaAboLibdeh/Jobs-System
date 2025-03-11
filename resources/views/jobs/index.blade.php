<x-layout>

    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job!</h1>

            
            <x-forms.form action="/search" class="mt-6">
                <x-forms.input :label="false" name="q" aria-placeholder="Web Develpoer..." />
            </x-forms.form>

        </section>


        <section class="pt-10">
            <x-section-headding>Featured Jobs</x-section-headding>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
            @foreach ($jobs as $job )
                <x-job-card :$job/>
                @endforeach
            </div>

        </section>

        <section>
            <x-section-headding>Tags</x-section-headding>
            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :$tag/>
                @endforeach


            </div>
        </section>

        <section>
            <x-section-headding>Recent Jobs</x-section-headding>
            <div class="mt-6 space-y-6">
                

                @foreach ($jobs as $job )
                <x-job-card-wide :$job/>
                @endforeach
            </div>
        </section>


    </div>

</x-layout>