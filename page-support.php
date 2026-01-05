<?php
/**
 * Template Name: 지원금 페이지
 * Description: 지원금 전용 워드프레스 템플릿
 */

get_header(); ?>

<div class="main-wrapper">
    <div class="container">
        <!-- 탭 메뉴 -->
        <div class="tab-wrapper">
            <div class="container">
                <nav class="tab-container">
                    <ul class="tabs">
                        <li class="tab-item">
                            <a class="tab-link active" href="https://jiwungumwp100.dpdns.org">전국민 지원금</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- 이탈 방지 팝업 -->
        <div class="exit-popup-overlay" id="exitPopup">
            <div class="exit-popup">
                <div class="exit-popup-title">🎁 잠깐! 놓치신 혜택이 있어요</div>
                <div class="exit-popup-desc">
                    지금 확인 안 하면<br>
                    <strong>최대 300만원</strong> 지원금을 못 받을 수 있어요!
                </div>
                <button class="exit-popup-btn" onclick="closePopupAndScroll()">
                    내 지원금 확인하기 →
                </button>
                <button class="exit-popup-close" onclick="closePopupNotNow()">
                    다음에 할게요
                </button>
            </div>
        </div>

        <!-- 상단 인트로 -->
        <div class="intro-section">
            <span class="intro-badge">신청마감 D-3일</span>
            <p class="intro-sub">숨은 보험금 1분만에 찾기!</p>
            <h2 class="intro-title">숨은 지원금 찾기</h2>
        </div>

        <!-- 광고 코드를 입력하지 않았습니다 -->

        <!-- 정보 박스 -->
        <div class="info-box">
            <div class="info-box-header">
                <span class="info-box-icon">🏷️</span>
                <span class="info-box-title">신청 안하면 절대 못 받아요</span>
            </div>
            <div class="info-box-amount">1인 평균 127만원 환급</div>
            <p class="info-box-desc">대한민국 92%가 놓치고 있는 정부 지원금! 지금 확인하고 혜택 놓치지 마세요.</p>
        </div>

        <!-- 카드 그리드 -->
        <div class="info-card-grid">
  
    <!-- 근로장려금 카드 -->
    <a class="info-card featured" href="https://jiwungumwp100.dpdns.org">
        <div class="info-card-highlight">
            <span class="info-card-badge">🔥 인기</span>
            <div class="info-card-amount">최대 330만원</div>
            <div class="info-card-amount-sub">연간 지급 + 비과세 혜택</div>
        </div>
        <div class="info-card-content">
            <h3 class="info-card-title">근로장려금</h3>
            <p class="info-card-desc">일하는 저소득 가구에게 현금으로 지원하는 근로소득 장려금</p>
            <div class="info-card-details">
                <div class="info-card-row">
                    <span class="info-card-label">지원대상</span>
                    <span class="info-card-value">연소득 2천만원 이하 근로자</span>
                </div>
                <div class="info-card-row">
                    <span class="info-card-label">신청시기</span>
                    <span class="info-card-value">매년 5월 신청</span>
                </div>
            </div>
            <div class="info-card-btn">
                지금 바로 신청하기 <span class="btn-arrow">→</span>
            </div>
        </div>
    </a>

        </div>

        <!-- 히어로 섹션 -->
        <div class="hero-section">
            <div class="hero-content">
                <span class="hero-urgent">🔥 신청마감 D-3일</span>
                <p class="hero-sub">숨은 지원금 1분만에 찾기!</p>
                <h2 class="hero-title">
                    나의 <span class="hero-highlight">숨은 지원금</span> 찾기
                </h2>
                <p class="hero-amount">신청자 <strong>1인 평균 127만원</strong> 수령</p>
                <a class="hero-cta" href="https://jiwungumwp100.dpdns.org">
                    30초만에 내 지원금 확인 <span class="cta-arrow">→</span>
                </a>
                <div class="hero-trust">
                    <span class="trust-item">✓ 무료 조회</span>
                    <span class="trust-item">✓ 30초 완료</span>
                    <span class="trust-item">✓ 개인정보 보호</span>
                </div>
                <div class="hero-notice">
                    <div class="notice-content">
                        <div class="notice-title">💡신청 안하면 못 받아요</div>
                        <p class="notice-desc">대한민국 92%가 놓치고 있는 정부 지원금, 지금 확인하고 혜택 놓치지 마세요!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
