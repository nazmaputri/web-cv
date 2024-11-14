<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border-radius: 10px;
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #ddd;
        }
        .profile-photo {
            border-radius: 50%;
            width: 250px;
            height: 250px;
            object-fit: cover;
            margin: 0 auto 20px;
        }
        .name {
            font-size: 28px;
            font-weight: bold;
            color: #0D47A1;
        }
        .subtitle {
            font-size: 16px;
            color: #777;
            margin-top: 5px;
        }
        .contact-info {
            font-size: 14px;
            color: #555;
            margin: 5px 0;
        }
        h2 {
            font-size: 22px;
            color: #0D47A1;
            margin: 20px 0 10px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
        }
        .section-content {
            margin-bottom: 20px;
        }
        .section-content p {
            font-size: 14px;
            line-height: 1.6;
            color: #555;
        }
        .section-content ul {
            list-style-type: none;
            padding-left: 0;
        }
        .section-content li {
            background-color: #f0f4f8;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            font-size: 14px;
            color: #333;
        }
        .skill-list li, .language-list li {
            display: flex;
            justify-content: space-between;
        }
        .section-title {
            font-weight: bold;
            font-size: 16px;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header Section -->
        <div class="header">
            <img src="{{ public_path('storage/' . $profile->foto) }}" alt="Profile Photo" class="profile-photo">
            <div class="name">{{ $profile->nama }}</div>
            <div class="subtitle">
                @foreach($presentExperiences as $index => $experience)
                    {{ $experience->pekerjaan }}
                    @if ($index < $presentExperiences->count() - 1) <!-- Cek apakah ini bukan pekerjaan terakhir -->
                        |
                    @endif
                @endforeach
            </div>          
            <div class="contact-info">
                {{ $about->email }} | {{ $about->no_telp }}
            </div>
        </div>

        <!-- About Section -->
        <div class="section-content">
            <h2>About Me</h2>
            <p>{{ $about->deskripsi }}</p>
        </div>

        <!-- Skills Section -->
        <div class="section-content">
            <h2>Skills</h2>
            <ul class="skill-list">
                @foreach($skills as $skill)
                    <li>
                        <span>{{ $skill->skill }} : </span>
                        <span>{{ $skill->deskripsi }}</span>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Languages Section -->
        <div class="section-content">
            <h2>Languages</h2>
            <ul class="language-list">
                @foreach($languages as $language)
                    <li>
                        <span>{{ $language->bahasa }}</span>
                        <span>{{ $language->persentase_bar }}</span>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Education Section -->
        <div class="section-content">
            <h2>Education</h2>
            <ul>
                @foreach($educations as $education)
                    <li>
                        <div class="section-title">{{ $education->universitas }}</div>
                        <div>{{ $education->tahun_mulai }} - {{ $education->tahun_akhir }}</div>
                        <p>{{ $education->deskripsi }}</p>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Experience Section -->
        <div class="section-content">
            <h2>Experience</h2>
            <ul>
                @foreach($experiences as $experience)
                    <li>
                        <div class="section-title">{{ $experience->pekerjaan }} | {{ $experience->tempat_kerja }}</div>
                        <div>{{ $experience->tahun_mulai }} - {{ $experience->tahun_akhir }}</div>
                        <p>{{ $experience->deskripsi }}</p>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Certificates Section -->
        <div class="section-content">
            <h2>Certificates</h2>
            <ul>
                @foreach($certificates as $certificate)
                    <li>
                        <div class="section-title">{{ $certificate->judul }}</div>
                        <div>Certificate Number : {{ $certificate->nomor_sertifikat }}</div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>
